<?php
require 'Validator.php';

$db = App::resolve(Database::class);

$heading = 'Edit post';

$post = $db->query('select * from posts where id = :id', [
    'id' => $_GET['id']
])->fetch();

// authorize($post['user_id'] === $currentUserID);

// $errors = [];

// if (!Validator::string($_POST['title'])) {
//     $errors['title'] = 'The fild is required.';
// }

// if (!Validator::string($_POST['title'], 1, 100)) {
//     $errors['title'] = 'The title can not be more then 100 characters.';
// }

// if (!Validator::string($_POST['content'], 1, 100)) {
//     $errors['content'] = 'The content can not be more then 1000 characters.';
// }

// if (count($errors)) {
//     return view("blog/edit.view.php", [
//         'heading' => 'Edit Post',
//         'errors'  => $errors
//     ]);
// }

// $db->query('UPDATE posts SET( img, title, content, user_id ) VALUES(:img, :title, :content, :user_id )', [
//     'img'          => $_POST['img'],
//     'title'        => $_POST['title'],
//     'content'      => $_POST['content'],
//     'user_id'      => 1
// ]);



// header('location: /blog');
require "views/blog/edit.view.php";
