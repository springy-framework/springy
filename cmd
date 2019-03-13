#!/usr/bin/env php
<?php

$startTime = microtime(true);

// Loads the Composer autoload
require __DIR__.'/vendor/autoload.php';

$app = new Springy\Console\Kernel(__DIR__.'/conf/main.php');

$status = $app->run($startTime)->getExitStatus();

exit($status);
