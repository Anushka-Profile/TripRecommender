<?php
    $fnameErr =$lnameErr = $emailErr = $mobilenoErr = "";  
    $firstname =$lastname = $email = $mobileno = $agree = "";
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!isset($_POST["firstname"])){
            $fnameErr="This field is required";
        }else{
            $fname=input_data($_POST["firstname"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$fname)){
                $fnameErr="Only alphabets and white space are allowed";
            }
        }

        $first_name="user";
        $first_value= $_POST["fname"];
        setcookie($first_name, $first_value, time()+(86400),"/");

        if(!isset($_POST["lastname"])){
            $lnameErr="This field is required";
        }else{
            $lname=input_data($_POST["lastname"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$lname)){
                $lnameErr="Only alphabets and white space are allowed";
            }
        }
        
        if (!isset($_POST["emailid"])) {  
            $emailErr = "Email is required";  
            } else {  
            $email = input_data($_POST["emailid"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
        }
        
        if (!isset($_POST["telnum"])) {  
            $mobilenoErr = "Mobile no is required";  
        } else {  
            $mobileno = input_data($_POST["telnum"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
            //check mobile no length should not be less and greator than 10  
            if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
        }

        if(empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($mobilenoErr)){
                header("Location: home.php");
        }
        // if (!isset($_POST['agree'])){  
        //     $agreeErr = "Accept terms of services before submit.";  
        // } else {  
        //     $agree = input_data($_POST["agree"]);  
        // }


    
    }  
    
    function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
      } 
    ?>

<!DOCTYPE html>
<html>
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
    <style>
        .error{color: #FF0001;}   
    </style>
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
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active">Registration</li>
            </ol>
            <div class="col-12">
               <h3>Registration Form</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-12 col-md-9">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-form-label">First Name<span class="error">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="firstname" name="firstname"
                            placeholder="First Name">
                            <span class="error"><?php echo $fnameErr; ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-md-2 col-form-label">Last Name<span class="error">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="lastname" name="lastname"
                            placeholder="Last Name">
                            <span class="error"><?php echo $lnameErr; ?> </span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.<span class="error">*</span></label>
                        <div class="col-5 col-md-3">
                            <input type="tel" class="form-control" id="areacode" name="areacode"
                            placeholder="Area Code">
                        </div>
                        <div class="col-7 col-md-7">
                            <input type="tel" class="form-control" id="telnum" name="telnum"
                            placeholder="Tel. Number">
                            <span class="error"> <?php echo $mobilenoErr; ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailid" class="col-md-2 col-form-label">Email<span class="error">*</span> 
                        </label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="emailid" name="emailid"
                            placeholder="Email">
                            <span class="error"> <?php echo $emailErr; ?> </span> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"
                                name="approve" id="approve" value="">
                                <label class="form-check-label" for="approve">
                                    <strong>May we contact you?</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control">
                                <option>Tel.</option>
                                <option>Email</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
             <div class="col-12 col-md">
            </div>
       </div>

</body>
</html>