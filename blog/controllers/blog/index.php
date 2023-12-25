<?php

$db = App::resolve(Database::class);

$heading = 'My Posts';
$user_email = $_SESSION['user']['email'];
$user_id = $db->query("SELECT id FROM `users` WHERE `email` = '$user_email' ")->fetch();
$id = $user_id['id'];
if ($id) {
    $posts = $db->query("SELECT * FROM `posts` WHERE `user_id` = $id")->fetchALL();
    // $posts = $db->query("SELECT * FROM `posts` WHERE `user_id` = $id AND `post_status` = 'Publish'")->fetchALL();
    // $posts = $db->query("SELECT * FROM `posts` WHERE `user_id` = $id AND `publish_date` <CURRENT_DATE()")->fetchALL();
} else {
    header('location: /blog/create');
    exit();
}
// $posts = $db->query('select * from posts where user_id = 1')->fetchALL();
// $posts = $db->query('select * from posts')->fetchALL();

require "views/blog/index.view.php";
// view("/blog/index.view.php", [
//     'heading'  => 'Single post',
//     'posts'    => $posts
// ]);
// require base_path("views/blog/index.view.php");
