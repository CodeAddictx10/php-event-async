<?php

require 'vendor/autoload.php';

$loop = React\EventLoop\Factory::create();

$loop->addPeriodicTimer(5, function () {
    echo "Hello world\n";
});

echo "Starting loop\n";

$loop->run();
