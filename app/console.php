<?php

require __DIR__.'/../vendor/autoload.php';
use Enaylal\Command\CreateCommand;
use Enaylal\Command\ListCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new CreateCommand());
$application->add(new ListCommand());
$application->run();
