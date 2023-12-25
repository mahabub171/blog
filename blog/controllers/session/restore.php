<?php
$email          = $_POST['email'];
// dd($email);
$new_password   = $_POST['new_password'];
$new_password_c = $_POST['new_password_c'];

$db = App::resolve(Database::class);

$errors = [];
if (!Validator::string($_POST['new_password'], 7, 100)) {
    $errors['new_password'] = 'Please provide a new password of at least seven characters.';
}
if (!Validator::string($_POST['new_password_c'], 7, 100)) {
    $errors['new_password_c'] = 'Please provide a new confirm password of at least seven characters.';
}
if ($new_password !== $new_password_c) {
    $errors['do_not_match_pasword'] = 'Password do not match password';
}

if (!empty($errors)) {
    return view("session/reset.view.php", [
        'heading' => 'Reset password',
        'errors'  => $errors
    ]);
}

// $new_password   = password_hash($_POST['new_password'], PASSWORD_BCRYPT);


if (empty($errors)) {
    $db->query("UPDATE users SET password = :password WHERE email = :email", [
        'email'    => $_POST['email'],
        'password' => password_hash($_POST['new_password'], PASSWORD_BCRYPT)
    ]);

    // header('loctaion: /login');
    // exit();
    return view('session/create.view.php', [
        'heading' => "Log in",
        'errors' => $errors
    ]);
}


// header('location: /');
// exit();
// if (empty($errors)) {
//     $db->query("UPDATE users SET password = :password WHERE email = $email", [
//         'password' => password_hash($_POST['new_password'], PASSWORD_BCRYPT)
//     ]);
//     header('loctaion: /login');
//     exit();
// } else {
//     return view('session/reset.view.php', [
//         'heading' => "Reset password",
//         'errors' => $errors
//     ]);
// }
