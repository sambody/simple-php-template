<?php
declare(strict_types=1);
spl_autoload_register();

require 'Helpers/helpers.php';



$service = new FrisdrankService();
$items = $service->getAll();
$item = $service->get(1);
dump($item);
dd($items);
