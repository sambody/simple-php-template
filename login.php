<?php

declare(strict_types=1);

spl_autoload_register();

use App\Business\Session;
use App\Business\UserService;

$error = '';

$session = new Session();

// Debug
//$userService = new UserService();
//$alleGebruikers = $userService->getAllUsers();
//$sessionLogin = $_SESSION['loggedin'] ?? null;


if (($_SERVER['REQUEST_METHOD'] === 'POST') && $_POST['action'] === 'login') {
    // login attempt
    if (isset($_POST['naam']) || isset($_POST['paswoord'])) {
        $naam = $_POST['naam']; // only set if they exist, otherwise error
        $paswoord = $_POST['paswoord'];
        $userService = new UserService();


        if (!$userService->validateUserPassword($naam, $paswoord)) {
            $error = 'Naam of paswoord is niet correct';
        } else {
            $session->setLoggedIn('index.php');
        }

    } else {
        $error = 'Naam of paswoord is leeg';
    }
}

if (($_SERVER['REQUEST_METHOD'] === 'POST') && $_POST['action'] === 'logout') {
    $session->setLoggedOut('index.php');
}

include('App/Presentation/login-form.php');

