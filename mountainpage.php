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
        <link rel="stylesheet" href="css/style_wish.css">     
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
                        
                        session_start();
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
    <br><br><br>

        <div class="row">

        <div class="col-md-8">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1578271887552-5ac3a72752bc?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTF8fG1vdW50JTIwZnVqaXxlbnwwfDB8MHw%3D&auto=format&fit=crop&w=500&q=60" alt="mount-hotel1">
                    </div>
                    <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1577941156786-30cf7d733f3d?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8NjN8fG1vdW50YWluJTIwaG90ZWx8ZW58MHwwfDB8&auto=format&fit=crop&w=500&q=60" alt="mount-hotel2">
                    </div>
                    <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1602273591505-90f8ea823e3c?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTR8fG1vdW50JTIwZnVqaXxlbnwwfDB8MHw%3D&auto=format&fit=crop&w=500&q=60" alt="mount-hotel3">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>

            <div class="col-md-4">
                <h3 class="my-3">Description:</h3>
                <p>Mount Fuji is nearly 12,400 ft tall and is Japan’s No.1 tourist attraction. The breathtaking views here never fail to impress anybody who comes here. This is one of the most massive volcanic mountains in the world, which is active even now and majestically sits over a junction of three tectonic plates.</p>
                <h3 class="my-3">Details:</h3>
                <ul>
                    <li><b>Best time:</b> July to August</li>
                    <li><b>Cost:</b> Rs 35,000/- per person</li>
                    <li><b>Language:</b> Japanese</li>
                    <li><b>Country:</b> Japan</li>
                </ul>

                <div class="col-md-8">
                    <a href="https://www.booking.com/index.en.html?aid=393655&label=msn-ifMLfZyKkRiKiBfAbudMjA-80607946534151:tikwd-16898971272:loc-90:neo:mte:dec:qsmountain%20hotels&utm_campaign=English%20EN%20ROW-CAUS&utm_medium=cpc&utm_source=bing&utm_term=ifMLfZyKkRiKiBfAbudMjA&msclkid=1e9f6397c8441339bc5b3c2c2d1aada9">
                    <button class="btn btn-lg btn-brand btn-full-width btn-success">
                        Book Hotel
                    </button></a>
                </div>
            </div>
        
        </div>
        <br><br><br>

    </div>
    
    <?php include("footer1.html"); ?>

    </body>
</html>