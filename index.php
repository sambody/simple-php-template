<?php

declare(strict_types=1);

spl_autoload_register();

use App\Business\ItemService;

require_once __DIR__ . '/App/Helpers/helpers.php';

//$user = (!empty($_SESSION['user'])) ? $_SESSION['user'] : false;

// Get data
//$cartProducts = $productService->getProductsFromCart();
//$sessionUser = Session::get('user');

// Show page, will include content and pageTitle
$content = 'home-components.php';
$pageTitle = 'Home page';
include_once 'App/Views/template-full.php';



