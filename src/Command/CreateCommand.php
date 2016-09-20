<?php

namespace Enaylal\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateCommand extends Command
{
    protected function configure()
    {
        $this->setName('route:create')
        ->setDescription('Create new route with controller')
        ->setHelp("you gna create new route with this")
        ->addArgument('method', InputArgument::REQUIRED, 'The of app')
        ->addArgument('route', InputArgument::REQUIRED, 'The of app')
        ->addArgument('controller_method', InputArgument::REQUIRED, 'The of app');
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $route_path = realpath(__DIR__."/../../app/routes.php");
        $edit = fopen($route_path, 'a+');
        fputs($edit, '$router->'.$input->getArgument('method').'("'.$input->getArgument('route').'", "'.$input->getArgument('controller_method').'");'."\n");
        fclose($edit);

        $output->writeln([
            '======================',
            '=   Route creation   =',
            '======================',
            '',
        ]);
        $output->writeln('you can now just create your Controller');
        $output->writeln('route: '.$input->getArgument('route')." ".$input->getArgument('controller_method'));
    }

}