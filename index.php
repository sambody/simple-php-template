<?php

declare(strict_types=1);

spl_autoload_register();

use App\Business\ItemService;

require_once __DIR__ . '/App/Helpers/helpers.php';

view('home.view.php', [
    'pageTitle' => 'Home page',
    'activeNavItem' => 'home',
]);
