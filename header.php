

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!-- Bootstrap Cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    <!-- custom css file -->
    <link rel="stylesheet" href="style.css">

    <?php 
        require ('functions.php');
    ?>
</head>
<body>

    

    <!-- start hearder -->
        <header id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <p class="font-rale font-size-12 text-black-50 m-0">irferax@gmail.com</p>
                
                <div class="font-rale font-size-14">
                    <a href="" class="px-3 border-right border-left text dark">Login</a>
                    <a href="" class="px-3 border-right text dark">Whishlist(0)</a>
                </div>
            </div>
            <!-- Primary Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <a class="navbar-brand" href="#">Mobile Shope</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">On Sale</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Catgory <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Comming Soon</a>
                    </li>
                  </ul>
                  <form action="" class="font-size 14 font-rale">
                      <a href="cart.php" class="p-2 rounded-pill color-primary-bg">
                          <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                          <span class="px-3 py-1 rounded-pill text-dark bg-light"><?php echo count($product -> getData('cart')) ?></span>
                      </a>
                  </form>
                </div>
            </nav>
            <!-- Primary Navigation -->
        </header>
    <!-- start hearder -->
    <!-- start main site -->
        <main id="main-site">