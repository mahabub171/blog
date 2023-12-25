<?php

$user_name = $_POST['user_name'];
$email     = $_POST['email'];
$password  = $_POST['password'];

// validate the form inputs.
$errors = [];
if (!Validator::string($user_name)) {
    $errors['user_name'] = 'Please user name is required.';
}

if (!Validator::email($email)) {
    $errors['email'] = "Please provide a valid email address.";
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = "Please provide a password of at least seven characters.";
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'heading' => "Registration",
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

//check if the account already exists

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->fetch();


if ($user) {
    // If yes, redirect to a login page.
    // If not, save on the database, and then log the user in, and redirect.
    header('location: /');
    exit();
} else {
    $db->query('INSERT INTO users(user_name, email, password) VALUES(:user_name, :email, :password)', [
        'user_name' => $_POST['user_name'],
        'email'     => $_POST['email'],
        'password'  => password_hash($_POST['password'], PASSWORD_BCRYPT)
    ]);

    // mark that the user has logged in.

    login($user);

    header('location: /');
    exit();
}
