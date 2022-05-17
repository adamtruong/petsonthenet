<?php
    require ('./database/DBController.php');

    require ('./database/Product.php');

    require ('./database/cart.php');


$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();
// Cart object
$Cart = new cart($db);
