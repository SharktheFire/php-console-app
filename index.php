<?php

require './vendor/autoload.php';


use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new SharktheFire\Console\ExampleCommand());


$application->run();
