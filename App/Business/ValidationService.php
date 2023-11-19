<?php

declare(strict_types=1);

namespace App\Business;

class ValidationService // or Validate ?
{
    /*
     * Use: ValidationService::string('string')
     * */
    public static function string($value, $minimumChars = 1, $maximumChars = INF)
    {
        $value = trim($value);

        return strlen($value) >= $minimumChars && strlen($value) <= $maximumChars;
    }

    public static function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}