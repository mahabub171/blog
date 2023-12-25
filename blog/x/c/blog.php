<?php
$config = require('config.php');

$db = new Database($config['database']);

$heading = 'My posts';

$posts = $db->query('select * from posts where user_id = 1')->fetchALL();

require "views/blog.view.php";
