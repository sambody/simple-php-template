<?php

declare(strict_types=1);

namespace App\Business;

// Example of use:
//$errors = [];
//if (!Validator::email($email)){
//    $errors['email'] = 'Please provide a valid email address.'
//}

class FormValidator
{
    /*
     * Use:
     * ValidationService::string($yourVar)
     * ValidationService::string($yourVar, 6, 255)
     * */
    public static function string($value, $minimumChars = 1, $maximumChars = INF): bool
    {
        $value = trim($value);

        return strlen($value) >= $minimumChars && strlen($value) <= $maximumChars;
    }

    public static function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}