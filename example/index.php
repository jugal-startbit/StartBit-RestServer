<?php

require __DIR__ . '/../source/Startbit/RestServer/RestServer.php';
require 'TestController.php';

$server = new \Startbit\RestServer\RestServer('debug');
$server->addClass('TestController');
$server->handle();
