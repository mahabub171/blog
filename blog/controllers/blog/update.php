<?php
require 'Validator.php';
$db = App::resolve(Database::class);
// dd('jhg');
// $currentUserID = 2;

// $post = $db->query('select * from posts where id = :id', [
//     'id' => $_POST['id']
// ])->fetch();

// authorize($post['user_id'] === $currentUserID);

$errors = [];

if (!Validator::string($_POST['title'])) {
    $errors['title'] = 'The fild is required.';
}

if (!Validator::string($_POST['content'], 1, 1000)) {
    $errors['content'] = 'The content can not be more then 1000 characters is required.';
}

if (count($errors)) {
    return view("blog/edit.view.php", [
        'heading' => 'Edit Post',
        'errors'  => $errors
    ]);
}

// $db->query("UPDATE users SET password = :password WHERE email = :email", [
//     'email'    => $_POST['email'],
//     'password' => password_hash($_POST['new_password'], PASSWORD_BCRYPT)
// ]);


$db->query("UPDATE posts SET title = :title, content = :content WHERE id = :id ", [
    'id'    => $_POST['id'],
    'title'        => $_POST['title'],
    'content'      => $_POST['content']

]);
header('location: /blog');
exit();
