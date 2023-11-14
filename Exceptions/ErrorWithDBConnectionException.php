<?php

declare(strict_types=1);

namespace Exceptions;

use \Exception;

class ErrorWithDBConnectionException extends Exception
{
    public function __construct()
    {
        parent::__construct();
        $this->message = "Er is iets mis met de database connectie...";
    }
}