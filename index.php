<?php

declare(strict_types=1);

spl_autoload_register();

//spl_autoload_register(function ($class) {
//    str_replace('\\', DIRECTORY_SEPARATOR, $class);
//    require basePath("App/{$class}.php");
//});

require_once __DIR__ . '/App/Helpers/helpers.php';


echo 'hello';



