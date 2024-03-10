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
    public static function string(string $value, int $minimumChars = 1, int|float $maximumChars = INF): bool
    {
        $value = trim($value);

        return strlen($value) >= $minimumChars && strlen($value) <= $maximumChars;
    }

    // return the email if valid, or false
    public static function email(string $email): string|bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function number(int $number, int $minimumValue = 0, int|float $maximumValue = INF): bool
    {
        return $number >= $minimumValue && $number <= $maximumValue;
    }

    public static function postcode(string $postcode): bool
    {
        // Todo: check directly if it is one of available plaatsen in DB? Or keep separate validations?
        return ctype_digit($postcode) && strlen($postcode) === 4;
    }
}