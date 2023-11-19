<?php

namespace App\Business;

class Session
{
    private static function start(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function get(string $key): ?string
    {
        self::start();
        if (self::has($key)){
            return $_SESSION[$key];
        }
        return null;
    }

    public function set(string $key, $value): void
    {
        self::start();
        $_SESSION[$key] = $value;
    }

//    public function setAll(array $params): void
//    {
//        self::start();
//        foreach ($params as $key => $value) {
//            $_SESSION[$key] = $value;
//        }
//    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $_SESSION);
    }

    public function remove(string $key): void
    {
        self::start();
        if (self::has($key)){
            unset($_SESSION[$key]);
        }
    }

    // destroy, clear, close the session
    public function clear(): void
    {
        self::start();
        $_SESSION = null;
        session_destroy();
    }

    public function setLoggedIn($destinationURL = null): void
    {
        self::start();
        $this->set('loggedin', '1');
        if ($destinationURL){
            header('Location: ' . $destinationURL);
            exit(0);
        }
    }

    public function checkLoggedIn(string $redirectURL = 'login.php'): void
    {
        self::start();
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== '1'){
            header('Location: ' . $redirectURL);
            exit(0);
        }
    }

    public function setLoggedOut($destinationURL): void
    {
        self::start();
        self::clear();
        if ($destinationURL){
            header('Location: ' . $destinationURL);
            exit(0);
        }
    }

}