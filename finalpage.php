<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AroundTheWorld</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">  
        <link href="css/style_wish.css" rel="stylesheet">       
    </head>

    <body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" height="30" width="41"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="home.php" class="nav-link"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a href="register.php" class="nav-link"><span class="fa fa-address-card fa-lg"></span> Register</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link"><span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item dropdown"><a href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><span class="fa fa-list fa-lg"></span>
                         Explore</a>
                         <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="wishlist.php">Mountains</a>
                            <a class="dropdown-item" href="beach.php">Beaches</a>
                            <a class="dropdown-item" href="desert.php">Deserts</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                    </li>
                </ul>
                <span class="navbar-text">
                    <button class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target = "#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                    <span class="navbar-toggler-icon"></span>
                </button>
                </span> 
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fa fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

            </div>
        </div>
    </nav> 
    
        

<div class="container">
<br><br>
<?php
    if(!isset($_COOKIE['user'])) {
      echo "Cookie named '" . 'user' . "' is not set!";
    } else {
      // echo "Cookie '" . user . "' is set!<br>";
      echo "<h2>Welcome, " . $_COOKIE['user']." !</h2>";
    }
?>
  <h4>Successfully logged in to AroundTheWorld </h4><br>
  <p>Here are coupons for your favorite/bookmarked destinations from your previous activity.</p>
  <p>Thankyou for being a valuable user. Visit our page again:) </p>
  
 
  <div class="row">
    
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img  class="d-flex mr-3 img-thumbnail align-self-center" src="img/Kashmir2.jpg" alt="Kashmir" style="width:100%">
        </a>
          <div class="caption">
            <center><p>50% off </p>
            <button class="btn btn-success">Code: XYZ123</button></center>
          </div>
        
      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img  class="d-flex mr-3 img-thumbnail align-self-center" src="img/Kashmir2.jpg" alt="Kashmir" style="width:100%">
        </a>
          <div class="caption">
            <center><p>Flat INR200/- </p>
            <button class="btn btn-success">Code: ATW765</button></center>
          </div>
        
      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img  class="d-flex mr-3 img-thumbnail align-self-center" src="img/Kashmir2.jpg" alt="Kashmir" style="width:100%">
        </a>
          <div class="caption">
            <center><p>Buy 1 get 1</p>
            <button class="btn btn-success">Code: XYA12A</button></center>
          </div>
        
      </div>
    </div>

    
  </div>

  <br><br>
  <center><h4>Happy Travelling !</h4></center>
  <br><br>
</div>

<?php include("footer1.html"); ?>

    </body>
</html>