<?php

declare(strict_types=1);

spl_autoload_register();

use App\Business\ItemService;

require_once __DIR__ . '/App/Helpers/helpers.php';

//$user = (!empty($_SESSION['user'])) ? $_SESSION['user'] : false;

echo 'bingo';


//$errors = [];
//$productService = new ProductService();
//
//if (($_SERVER['REQUEST_METHOD'] === 'POST') && $_POST['action'] === 'add-to-cart') {
//    if (isset($_POST['product-count']) && isset($_POST['product-id'])){
//        $count = (integer) $_POST['product-count'];
//        $id = (integer) $_POST['product-id'];
//
//        if ($count <= 0){
//            $errors[] = 'Het aantal moet een positief getal zijn. Probeer opnieuw.';
//        }
//
//        if ($productService->getProduct($id) === null){
//            $errors[] = 'Product id klopt niet...';
//        }
//
//        if (empty($errors)){
//
//            // Session cart has array of type: (product) id => count
//            $cart = Session::get('cart') ?? [];
//            $cart[$id] = $cart[$id] ?? 0;
//            $cart[$id] += $count;
//
//            Session::set('cart', $cart);
//        }
//    }
//}



// Get data
//$menu = $productService->getAllProducts();
//$cartProducts = $productService->getProductsFromCart();
//$cartTotalPrice = $productService->getTotalPrice($cartProducts);
//$sessionUser = Session::get('user');

// Show page, will include content and pageTitle
$content = 'home.php';
$pageTitle = 'Home page';
include_once 'App/Presentation/template.php';



