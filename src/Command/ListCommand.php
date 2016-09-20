<?php

namespace Enaylal\Command;

use Enaylal\Routing\Router;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ListCommand extends Command
{

    protected function configure()
    {
        $this
            ->setName('route:list')
            ->setDescription('Get a list of all routes')
            ->addOption(
                'method',
                'm',
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Filter routes by their request method (GET, POST, ...)'
            )
            ->addOption(
                'controller',
                'c',
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Filter by the controller name (REGEX)'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $methodSearch       = implode('|', $input->getOption('method'));
        $controllerSearch   = implode('|', $input->getOption('controller'));

        $router = new Router();
        require __DIR__.'/../../app/routes.php';

        $result = [];
        $compter = 0;

        // Tous les types de routes GET, POST, ...
        foreach ($router->getRoute() as $type => $routes) {

            // Toutes les routes du type
            foreach ($routes as $route) {

                // URL
                $path = $route->getUrl();
                if (empty($path)) {
                    $path = '/';
                }

                // Contrôleur et méthode
                $controller = '';
                $action = explode('@', $route->getCall(), 2);

                if (count($action) == 2) {
                    $controller = $action[0];
                    $action = $action[1];
                }


                if (preg_match("#$methodSearch#i", $type) &&
                    preg_match("#$controllerSearch#i", $controller)) {
                    $compter +=1;
                    $result[$compter] = [];
                    $result[$compter][] = $type;
                    $result[$compter][] = $path;
                    $result[$compter][] = $controller;
                    $result[$compter][] = $action;
                }
            }
        }

        if (empty($result)) {
            $result = [[
                'METHOD EMPTY', 'URL EMPTY', 'CONTROLLER EMPTY', 'ACTION EMPTY'
            ]];
        }

        $output->writeln('');

        $table = new Table($output);
        $table->setHeaders(['METHOD', 'URL', 'CONTROLLER', 'FUNCTION']);
        $table->setRows($result);
        $table->render();
    }

}
