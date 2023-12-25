<?php
$config = require('config.php');

$db = new Database($config['database']);

$heading = 'My post';
$currentUserID = 1;

$post = $db->query('select * from posts where id = :id', [
    'id' => $_GET['id']
])->fetch();
if (!$post) {
    abort();
}

if ($post['user_id'] != $currentUserID) {
    abort(Response::FORBIDDEN);
}

require "views/single.view.php";
