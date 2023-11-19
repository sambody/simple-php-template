<?php

declare(strict_types=1);

function basePath(string $path){
    return __DIR__ . '/../' . $path;
}

// Debug helper functions
// To use: either require the file or add file to composer autoload config file.

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

function writeToLog(string $message): void // Or use custom log system
{
    // Write to apache log (or php log if set in php.ini)
    date_default_timezone_set('Europe/Brussels');
    error_log($message);
}
