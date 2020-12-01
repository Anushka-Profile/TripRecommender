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

    <?php include("header.php"); ?>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Around The World</h1>
                    <p>Welcome to Around The World travel community. Wherever you go, we have a place for you.</p>
                </div>
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
            <img class="d-block w-100 " src="img/homeBeach.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/homeGoa.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/homeTaj.jpg" alt="Third slide">
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
    
    <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Our Favorite Destination</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                            src="img/Kashmir2.jpg" alt="Kashmir">
                    <div class="media-body">
                        <h2 class="mt-0">The Heaven of Earth <span class="badge badge-danger">TRENDING</span> </h2>
                        <p class="d-none d-sm-block">Kashmir, The Heaven of Earth, is one of the most beautiful places on this Earth. 
                            It is situated in the state of Jammu and Kashmir and is also the place of Himalayan Ranges.There is absolutely nothing in 
                            Kashmir which will fail to mesmerise you with its beauty.
                         </p>
                    </div>
                </div>
            </div>
        </div>

    <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 col-md-3">
                <h3>This Month's Promotions</h3>
            </div>
            <div class="col col-sm col-md">
                <div class="media">
                    <div class="media-body">
                        <h2 class=" mt-0">One of the Ten Paradises of the World <span class="badge badge-danger">NEW</span></h2>
                        <p class=" d-none d-sm-block">Situated in the tropics of Malabar Coast, it stands as a source of natural 
                            beauty and greenery. Most of the parts of Kerala consists of lakes and water bodies. 
                            The Backwater lake of Kerala is one of the best attraction of the place.</p>
                    </div>    
                    <img src="img/Kerala2.jpg" alt="Kerala" 
                        class="d-flex ml-3 img-thumbnail align-self-center">
                </div>                
            </div>
        </div>

        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>From Editor's Pocket</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                            src="img/Darjeeling2.jpg" alt="Darjeeling">
                    <div class="media-body">
                        <h2 class="mt-0">The Queen of Hills</h2>
                        <h4>Darjeeling</h4>
                        <p class="d-none d-sm-block">You can see this place in the Lesser Himalayas. 
                            Its special characteristic is its tea garden which is also the main economic source of Darjeeling. 
                            You can also find the world’s third highest mountain Kanchenjunga.
                            </p>
                    </div>
                </div>
            </div>
        </div>



</div> 


<?php include("footer1.html"); ?>

    </body>
</html>