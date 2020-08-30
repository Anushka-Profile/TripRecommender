<?php
        
        // echo "<center>";
        // echo "<h2>Welcome to AroundTheWorld.com</h2>";
        // echo "<h3>Hello, User!</h3>";
        // echo "</center>";
        // echo "<h2> How can we help you?</h2>";
         
    ?>
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
                    <li class="nav-item active"><a href="#" class="nav-link"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-list fa-lg"></span> Explore</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>
                <span class="navbar-text">
                    <a href="register.php" class="nav-link">
                    <span class="fa fa-sign-in"></span> Login</a>
                </span>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Around The World</h1>
                    <p>Welcome to Around The World travel community. Wherever you go, we have a place for you.</p>
                </div>
                <div class="col-12 col-sm-3 align-self-center">
                    <img src="img/logo.png" class="img-fluid">
                </div>
                <!-- <div class="col-12 col-sm-3 align-self-center">
                    <a role="button" class="btn btn-block d-sm-block nav-link btn-warning"
                    id="reserveButton">Reserve Table</a>
                </div> -->
            </div>
        </div>
    </header>


<div class="container">  
<div class="row row-content">
<div class="col">  
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active" >
            <img class="d-block w-100 " src="img/thirdimg.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/secondimg.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/thirdimg.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    </div>    
</div> 

<footer>
    <div class="row justify-content-center">             
        <div class="col-auto">
            <p>© Copyright 2020 Around The World</p>
            </div>
        </div>
    </div>
</footer>
        
    </body>
</html>