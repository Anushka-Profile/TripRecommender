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
                <form>
                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="firstname" name="firstname"
                            placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="lastname" name="lastname"
                            placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                        <div class="col-5 col-md-3">
                            <input type="tel" class="form-control" id="areacode" name="areacode"
                            placeholder="Area Code">
                        </div>
                        <div class="col-7 col-md-7">
                            <input type="tel" class="form-control" id="telnum" name="telnum"
                            placeholder="Tel. Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailid" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="emailid" name="emailid"
                            placeholder="Email">
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


    <?php
    $nameErr = $emailErr = $mobilenoErr = $genderErr = $locationErr= $ageErr = $agreeErr = "";  
    $name = $email = $mobileno = $gender = $location = $age = $agree = "";
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["name"])){
            $nameErr="Name is required";
        }else{
            $name=input_data($_POST["name"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                $nameErr="Only alphabets and white space are allowed";
            }
        }
        
        if (isset($_POST["email"])) {  
            $emailErr = "Email is required";  
            } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
        }
        
        if (isset($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
        } else {  
            $mobileno = input_data($_POST["mobileno"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
            if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
        }
        

        if(isset($_POST["location"])){
            $locationErr="Location is required";
        }else{
            $name=input_data($_POST["location"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                $locationErr="Only alphabets and white space are allowed";
            }
        }
        
        if(isset($_POST["gender"])){
            $genderErr="Gender is required";
        }else{
            $gender=input_dara($_POST["gender"]);
        }

        if(isset($_POST["age"])){
            $ageErr="Age is required";
        }else{
            $age=input_dara($_POST["age"]);
        }

        if (!isset($_POST['agree'])){  
            $agreeErr = "Accept terms of services before submit.";  
        } else {  
            $agree = input_data($_POST["agree"]);  
        }
    }  
    
    function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
      } 
    ?>

      <center>
          
    <h2> Register here!</h2>
    <span class="error">*required field</span>
    <br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name:
    <input type="text" name="name" placeholder="Enter Full Name">
    <span class="error">* <?php echo $nameErr; ?> </span>
    <br><br>  
    E-mail:   
    <input type="text" name="email" placeholder="abc@gmail.com">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    <br><br>  
    Mobile No:   
    <input type="text" name="mobileno" placeholder="10 digit number">  
    <span class="error">* <?php echo $mobilenoErr; ?> </span> 
    <br><br> 
    Home City:
    <input type="text" name="location" placeholder="eg. Mumbai" >  
    <span class="error">* <?php echo $locationErr; ?> </span>  
    <br><br>
    Age:
    <input type="text" name="age">  
    <span class="error">* <?php echo $ageErr; ?> </span>  
    <br><br>
    Gender:  
    <input type="radio" name="gender" value="male"> Male  
    <input type="radio" name="gender" value="female"> Female  
    <input type="radio" name="gender" value="other"> Other  
    <span class="error">* <?php echo $genderErr; ?> </span>  
    <br><br>  
    Agree to Terms of Service:  
    <input type="checkbox" name="agree">  
    <span class="error">* <?php echo $agreeErr; ?> </span>  
    <br><br>                            
    <input type="submit" name="submit" value="Submit">   
    <br><br>                             
</form> 
    </center>

<?php
    if(isset($_POST['submit'])){
        if($nameErr=="" && $emailErr=="" && $mobilenoErr = "" && $genderErr ="" && $locationErr="" && $ageErr = "" && $agreeErr = ""){
            echo"<h3 color = #FF0001><b>You have sucessfully registered</b> </h3>";
            echo "<h2>Your Input:</h2>";  
        echo "Name: " .$name;  
        echo "<br>";  
        echo "Email: " .$email;  
        echo "<br>";  
        echo "Mobile No: " .$mobileno;  
        echo "<br>";  
        echo "Website: " .$website;  
        echo "<br>";  
        echo "Gender: " .$gender;  
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    }  
?>  

</body>
</html>