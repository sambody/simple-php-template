<?php

declare(strict_types=1);

// To use, either require the file, or add file to composer autoload config file.

function dd($value)
{
    // dump and die
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function dump($value)
{
    // var_dump
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function writeToLog($message)
{
    // Write to apache log (or php log if set in php.ini)
    // Alternative: write to custom file inside project
    date_default_timezone_set('Europe/Brussels');
    error_log($message);
}
