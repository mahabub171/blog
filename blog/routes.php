<?php

// return [
//     '/'   => 'controllers/index.php',
//     '/about'   => 'controllers/about.php',
//     '/blog'    => 'controllers/blog/index.php',
//     '/blog/create' => 'controllers/blog/create.php',
//     '/blog/show'  => 'controllers/blog/show.php',
//     '/contact' => 'controllers/contact.php',
// ];


$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/blog', 'controllers/blog/index.php')->only('auth');
$router->get('/single', 'controllers/single.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/blog/create', 'controllers/blog/create.php');
$router->post('/blog/store', 'controllers/blog/store.php');
$router->get('/blog/show', 'controllers/blog/show.php');
$router->delete('/blog/delete', 'controllers/blog/destroy.php');
$router->get('/blog/edit', 'controllers/blog/edit.php');
$router->patch('/update', 'controllers/blog/update.php');
$router->post('/comment', 'controllers/blog/comment.php');

$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php')->only('guest');
$router->get('/login', 'controllers/session/create.php')->only('guest');
$router->post('/session', 'controllers/session/store.php')->only('guest');
$router->delete('/session', 'controllers/session/destroy.php')->only('auth');
$router->get('/forgot', 'controllers/session/forgot.php')->only('guest');
$router->post('/reset', 'controllers/session/reset.php')->only('guest');
$router->patch('/restore', 'controllers/session/restore.php')->only('guest');
// dd($router->routes);
