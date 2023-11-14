<?php
declare(strict_types=1);
spl_autoload_register();

use Business\ItemService;
require 'Helpers/helpers.php';



function white_list(&$value, $allowed, $message) {
    if ($value === null) {
        return $allowed[0];
    }
    $key = array_search($value, $allowed, true);
    if ($key === false) {
        throw new InvalidArgumentException($message);
    } else {
        return $value;
    }
}


$service = new ItemService();
$films = $service->getAll();
$film = $service->get(1);
dump($film);
dd($films);
