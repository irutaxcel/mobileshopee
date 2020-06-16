<?php
    ob_start();
    // include header here
    include("header.php");
?>
            <?php 
                // include section banner area
                include('Template/_banner-area.php');
                // !include section banner area

                // include section top sales
                include('Template/_top-sales.php');
                // !include section top sales

                // include section special price
                include('Template/_special-price.php');
                // !include section special price

                // include section banner adds
                include('Template/_banner-adds.php');
                // !include section banner adds

                // include section banner adds
                include('Template/_new-phone.php');
                // !include section banner adds

                // include section banner adds
                include('Template/_blog.php');
                // !include section banner adds
            ?>
  
<?php 
    // include footer here
    include("footer.php")
?>