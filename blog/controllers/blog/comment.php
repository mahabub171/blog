<?php

$db = App::resolve(Database::class);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    $db->query('INSERT INTO comment( comment, post_id ) VALUES(:comment, :post_id )', [
        'comment'      => $_POST['comment'],
        'post_id'      => $_POST['id']
    ]);
}

header('location: /');
exit();
