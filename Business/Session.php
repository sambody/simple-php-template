<?php

namespace Business;

class Session
{
    private static function start(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    private static function get(string $key): string
    {
        self::start();
        return $_SESSION[$key];
    }

    private static function set(array $params): void
    {
        self::start();
        foreach ($params as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }

    private static function setLoggedIn()
    {
        self::start();
        $_SESSION['loggedin'] = '1';
    }

    private static function checkLoggedIn(string $redirectURL = 'login.php'): void
    {
        self::start();
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== '1'){
            header('Location: ' . $redirectURL);
            exit(0);
        }
    }

    private static function destroy(): void
    {
        self::start();
        $_SESSION = null;
        session_destroy();
    }

}