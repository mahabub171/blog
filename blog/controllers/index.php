<?php

$db = App::resolve(Database::class);
$heading = 'Blog';

//$posts = $db->query('select * from posts where post_status = "Publish"')->fetchALL();
$posts = $db->query("SELECT * FROM `posts` WHERE `user_id` = $id AND `publish_date` <CURRENT_DATE()")->fetchALL();

$comment = $db->query('select * from comment')->fetchAll();
require "views/index.view.php";

// view("index.view.php", [
//     'heading'  => 'Home',
// ]);
