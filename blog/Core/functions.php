<?php

namespace Core;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return $path;
}
function view($path, $attributes = [])
{
    extract($attributes);

    require 'views/' . $path;
}

// function login($user)
// {
//     $_SESSION['user'] = [
//         'email' => $user['email']
//     ];
// }
