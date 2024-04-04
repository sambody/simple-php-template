<?php

declare(strict_types=1);

spl_autoload_register();

use App\Business\Session;
use App\Business\UserService;
use App\Entities\User;

$error = '';
$session = new Session();

if (($_SERVER['REQUEST_METHOD'] === 'POST') && $_POST['action'] === 'login') {
    // login attempt
    if (isset($_POST['naam']) || isset($_POST['paswoord'])) {
        $email = $_POST['email']; // only set if they exist, otherwise error
        $paswoord = $_POST['paswoord'];
        $userService = new UserService();


        if (!$userService->validateUserPassword($email, $paswoord)) {
            $error = 'Email of paswoord is niet correct';
        } else {
            $userData = ['email' => $email];
            $session->login($userData, 'index.php');
        }

    } else {
        $error = 'Naam of paswoord is leeg';
    }
}

if (($_SERVER['REQUEST_METHOD'] === 'POST') && $_POST['action'] === 'logout') {
    $session->logout('index.php');
}

// Show page, will include content and pageTitle
$content = 'login-form.php';
$pageTitle = 'Login';
include_once 'App/Views/template-empty.php';