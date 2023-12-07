<?php

require_once 'vendor/autoload.php';

$container = new Pimple\Container([
    'path.root' => dirname(__DIR__),
    'debug' => false
]);

$container['pageTitle'] = 'My Website';
