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

    private static function get(string $key): ?string
    {
        self::start();
        if (self::has($key)){
            return $_SESSION[$key];
        }
        return null;
    }

    private static function set(string $key, $value): void
    {
        self::start();
        $_SESSION[$key] = $value;
    }

//    private static function setAll(array $params): void
//    {
//        self::start();
//        foreach ($params as $key => $value) {
//            $_SESSION[$key] = $value;
//        }
//    }

    private static function has(string $key): bool
    {
        return array_key_exists($key, $_SESSION);
    }

    public static function remove(string $key)
    {
        self::start();
        if (self::has($key)){
            unset($_SESSION[$key]);
        }
    }

    // destroy, clear, close the session
    private static function clear(): void
    {
        self::start();
        $_SESSION = null;
        session_destroy();
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

    private static function setLoggedOut()
    {
        self::start();
        self::clear();
    }

}