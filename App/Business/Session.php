<?php

namespace App\Business;

use App\Entities\User;

// By using these, there is no need to start the session separately, it's already included.
class Session
{
    private static function start(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Example of use: Session::get('user');
    public static function get(string $key, ?string $key2 = null): mixed
    {
        self::start();

        if(isset($_SESSION[$key])){
            if($key2){
                return $_SESSION[$key][$key2];
            }
            return $_SESSION[$key];
        }
        return null;
    }

    // Example of use: Session::set('cart', $cart);
    public static function set(string $key, $value): void
    {
        self::start();

        // If $value is an array, use it to update corresponding key/values
        if (is_array($value)){
            $array = $_SESSION[$key] ?? [];
            foreach($value as $key2 => $value2){
                $array[$key2] = $value2;
            }
            $_SESSION[$key] = $array;
            return;
        }

        $_SESSION[$key] = $value;
    }

//    public function setAll(array $params): void
//    {
//        self::start();
//        foreach ($params as $key => $value) {
//            $_SESSION[$key] = $value;
//        }
//    }

    // Example of use: Session::has('cart');
    public static function has(string $key, ?string $key2 = null): bool
    {
        self::start();

        if (isset($key2)) {
            return array_key_exists($key, $_SESSION[$key]);
        }
        return array_key_exists($key, $_SESSION);
    }

    public static function remove(string $key): void
    {
        self::start();

        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }

        // Todo: removing second key did not work
        //if (self::has($key)) {
        //    if ($key2) {
        //        unset($_SESSION[$key][$key2]);
        //    } else {
        //        unset($_SESSION[$key]);
        //    }
        //}
    }

    // Destroy/clear the session
    // Example of use: Session::clear();
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
    // Save user id and email in the session, redirect (optional)
    // Example of use: Session::login($user->getId(), $user->getEmail());
    public static function login(int $id, string $email, ?string $destinationURL = null): void
    {
        self::start();

        session_regenerate_id(true);

        // Save user id in the session
        $_SESSION['user'] = ['loginId' => $id, 'email' => $email];

        // Redirect the user
        header('Location: ' . $destinationURL);
        exit(0);
    }

    // Example of use: Session::isLoggedIn()
    public static function isLoggedIn(): bool
    {
        self::start();

        // check id only (email can exist when not logged in)
        return isset($_SESSION['user']['loginId']);
    }

    public static function logout($destinationURL = null): void
    {
        self::start();
        //self::set('user', false);

        // remove user id, keep email
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']['loginId']);
        }

        if ($destinationURL) {
            header('Location: ' . $destinationURL);
            exit(0);
        }
    }

}