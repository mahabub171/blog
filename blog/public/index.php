<?php

require 'functions.php';
spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require("{$class}.php");
});

require('router.php');
