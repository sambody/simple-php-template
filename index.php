<?php

declare(strict_types=1);

spl_autoload_register();
//spl_autoload_register(function ($class) {
//    str_replace('\\', DIRECTORY_SEPARATOR, $class);
//    require basePath("App/{$class}.php");
//});

use App\Business\ItemService;

require_once __DIR__ . '/App/Helpers/helpers.php';

//$user = (!empty($_SESSION['user'])) ? $_SESSION['user'] : false;




echo 'bingo';



