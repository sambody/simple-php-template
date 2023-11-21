<?php

namespace App\Business;

use App\Entities\User;

class Session
{
    private static function start(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function get(string $key): ?string
    {
        self::start();
        if (self::has($key)) {
            return $_SESSION[$key];
        }
        return null;
    }

    // Benefit of this: it includes session_start
    public static function set(string $key, $value): void
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

    public static function has(string $key): bool
    {
        return array_key_exists($key, $_SESSION);
    }

    public static function remove(string $key): void
    {
        self::start();
        if (self::has($key)) {
            unset($_SESSION[$key]);
        }
    }

    // destroy, clear, close the session
    public static function clear(): void
    {
        self::start();
        $_SESSION = null;
        session_destroy();

        // remove cookie (necessary?)
        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain']);
    }

    /*
     * $user: array of type ['email' => 'aaa@gmail.com']
     * */
    public static function login(array $user, $destinationURL = '/'): void
    {
        self::start();

        // Save user id in the session
        session_regenerate_id(true);

        $_SESSION['user'] = ['email' => $user['email']]; // other data can be added (not all)

        // Redirect the user
        header('Location: ' . $destinationURL);
        exit(0);
    }

    public static function loggedInOnly(): void
    {
        // If not logged in, redirect. Else do nothing.
        self::start();
        $user = $_SESSION['user'] ?? false;
        if (!$user) {
            header('Location: login.php');
            exit(0);
        }
    }

    public static function logout($destinationURL = null): void
    {
        self::start();
        self::set('user', false);

        if ($destinationURL) {
            header('Location: ' . $destinationURL);
            exit(0);
        }
    }

}