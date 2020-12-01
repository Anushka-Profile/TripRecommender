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
                <!-- <div class="col-12 col-sm-3 align-self-center">
                    <img src="img/logo.png" class="img-fluid">
                </div> -->
                <!-- <div class="col-12 col-sm-3 align-self-center">
                    <a role="button" class="btn btn-block d-sm-block nav-link btn-warning"
                    id="reserveButton">Reserve Table</a>
                </div> -->
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row ">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
            <div class="col-12">
               <h3>About Us</h3>
               <hr>
            </div>
        </div>


        <div class="row row-content">
            <div class="col-12 col-sm-6">
                <h2>Our History</h2>
                <p>Started in 2020, Around The World quickly established itself as a destination icon par excellence in India. With its unique brand of famous world destinations that can be found nowhere else, it enjoys wide popularity among youngsters. Featuring the best destinations in the world, you never know what will arrive on your plate the next time you visit us.</p>
                <p>We are committed to give the list of <em>The Exotic Places Worldwide</em>, don't forget to collect coupons on your favorite destinations and enjoy amazing offers.</p>
            </div>
            <div class="col-12 col-sm-6">
                    <div class="card">
                        <h3 class="card-header bg-primary text-white">Facts At a Glance</h3>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-6">Started</dt>
                                <dd class="col-6">1 Aug. 2020</dd>
                                <dt class="col-6">Major Stake Holder</dt>
                                <dd class="col-6">MakeMyTrip</dd>
                                <dt class="col-6">Employees</dt>
                                <dd class="col-6">02</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            <div class="col-12">
                <div class="card card-body bg-light">
                    <blockquote class="blockquote">
                        <p class="mb-0">Traveling – it leaves you speechless, then turns you into a storyteller.</p>
                        <footer class="blockquote-footer">Ibn Battuta,
                            <cite title="Source Title">A Gift to Those Who Contemplate the Wonders of Cities and the Marvels of Traveling
                            ,1300</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>

    </div>
    <?php include("footer1.html"); ?>


    </body>
</html>