<?php

    // require MySQL connection
    require ('database/DBController.php');

   // require Product 
    require ('database/Product.php');

    // require Cart 
    require ('database/Cart.php');

    // DBController object
    $db = new DBController();

    // DBController object
    $product = new Product($db);
    $product_shuffle = $product -> getData();

    // cart object
    $Cart = new Cart($db);
    
?>