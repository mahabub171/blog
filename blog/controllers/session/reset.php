<?php
$email        = $_POST['email'];

$db = App::resolve(Database::class);
$user_email = $db->query("select email from users where email = '$email'")->fetch();


if (empty($user_email['email'])) {
    view('session/forgot.view.php', [
        'heading' => "Sorry, no user exists on our system with that email"
    ]);
} else {
    view('session/reset.view.php', [
        'heading' => "Reset Password"
    ]);
}
