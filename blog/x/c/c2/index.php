<?php

//$config = require('config.php');
//$db = new Database($config['database']);
$heading = 'Home';


//$posts = $db->query('select * from posts where user_id = 2')->fetchALL();
// dd($posts);
require "views/index.view.php";
