<!DOCTYPE html>
<html>
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
                    <a id="loginButton">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
                    <span class="fa fa-sign-in"></span> Login</a>
                </span> </button>
            </div>
        </div>
    </nav>

    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <form action="loginCheck.php" method="POST" >
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                    <label class="sr-only" for="emailid">Email address</label>
                                    <input type="email" class="form-control form-control-sm mr-1" name="emailid" placeholder="Enter email">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="pass">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" name="pass" placeholder="Password">
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button  class="btn btn-success btn-sm ml-1">
                            <input type="submit" id="btn" value="Login"></button>      
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
