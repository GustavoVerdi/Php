<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Handler\StreamHandler;
use monolog\Level;
use Monolog\Logger;

$Log = new Logger('name');
$log->pushhandler(new StreamHandler('your.log', level::Warning));

$log->Warning('Foo');
$log->error('Bar');
