<?php

$db = App::resolve(Database::class);
$heading = 'Blog';

$posts = $db->query('select * from posts where post_status = "Publish"')->fetchALL();
// $posts = $db->query('select * from posts where user_id = 2')->fetchALL();
// dd($posts);

$comment = $db->query('select * from comment')->fetchAll();
require "views/index.view.php";

// view("index.view.php", [
//     'heading'  => 'Home',
// ]);
