#!/usr/bin/env php
<?php

error_reporting(E_ALL);

use Symfony\Component\Console\Application;
use App\Commands\HelloCommand;

require __DIR__ . '/vendor/autoload.php';

$app = new Application();
$app->add(new HelloCommand());
$app->run();
