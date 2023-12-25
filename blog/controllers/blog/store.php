<?php

require 'Validator.php';
$db = App::resolve(Database::class);
$user_email = $_SESSION['user']['email'];
$user_id = $db->query("SELECT id FROM `users` WHERE `email` = '$user_email' ")->fetch();
$id = $user_id['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (!Validator::string($_POST['title'])) {
        $errors['title'] = 'The fild is required.';
    }

    if (!Validator::string($_POST['title'], 1, 100)) {
        $errors['title'] = 'The title can not be more then 100 characters.';
    }

    if (!Validator::string($_POST['content'], 1, 100)) {
        $errors['content'] = 'The content can not be more then 1000 characters.';
    }

    if (!empty($errors)) {
        return view("blog/create.view.php", [
            'heading' => 'Create Post',
            'errors'  => $errors
        ]);
    }

    $db->query('INSERT INTO posts( img,  title, content, user_id ) VALUES(:img,  :title, :content, :user_id )', [
        'img'          => $_POST['img'],

        'title'        => $_POST['title'],
        'content'      => $_POST['content'],
        'user_id'      => $id
    ]);
}

header('location: /blog');
exit();
