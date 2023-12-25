<?php

$container = new Container();

$container->bind('Database', function () {
    $config = require 'config.php';

    return new Database($config['database']);
});

// $db = $container->resolve('Database');
// $container->resolve('sdfdslkjfsdlk');

// dd($db);

App::setContainer($container);
