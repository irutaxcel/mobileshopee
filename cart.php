<?php
    ob_start();
    // include header here
    include("header.php");
?>

            <?php 

                // include section cart
                count($product->getData('cart')) ? include('Template/_cart-template.php') : include('Template/notFound/_cart_notfound.php');
                
                // !include section cart

                // include section cart is not empty
                // include('Template/_cart-template.php');
                // !include section cart is not empty

                // include section wishlist
                count($product->getData('wishlist')) ? include('Template/_wishlist-template.php') : include('Template/notFound/_wishlist_notfound.php');
                // !include section wishlist

                // include section new phone
                include('Template/_new-phone.php');
                // !include section new phone

               
            ?>

<?php 
    // include footer here
    include("footer.php")
?>