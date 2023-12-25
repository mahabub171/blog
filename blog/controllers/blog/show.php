<?php

$db = App::resolve(Database::class);

$heading = 'Single post';

$post = $db->query('select * from posts where id = :id', [
    'id' => $_GET['id']
])->fetch();

// authorize($post['user_id'] === $currentUserID);
require "views/blog/show.view.php";
// view("/blog/show.view.php", [
//     'heading'  => 'Single post',
//     'post'     =>  $post
// ]);
// <?php

// use Database;

// $config = require('config.php');

// $db = new Database($config['database']);

// // $heading = 'Single post';
// // $currentUserID = 1;
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $post = $db->query('select * from posts where id = :id', [
//         'id' => $_GET['id']
//     ])->fetch();

//     authorize($post['user_id'] === $currentUserID);
//     // $db->query('delete from posts where id = :id', [
//     //     'id' = $_GET['id']
//     // ]);
//     // header('location: /blog');
//     // exit();
// } else {
//     $post = $db->query('select * from posts where id = :id', [
//         'id' => $_GET['id']
//     ])->fetch();

//     // $post = $db->query('select * from posts where id = :id', [
//     //     'id' => $_GET['id']
//     // ])->findOrFail();

//     authorize($post['user_id'] === $currentUserID);

//     view("/blog/show.view.php", [
//         'heading'  => 'Single post',
//         'post'     =>  $post
//     ]);
// }
// // if (!$post) {
// //     abort();
// // }

// // if ($post['user_id'] != $currentUserID) {
// //     abort(Response::FORBIDDEN);
// // }

// // require "views/blog/show.view.php";

// // authorize($post['user_id'] === $currentUserID);
