<?php
    session_start();

    $fnameErr =$lnameErr = $emailErr = $mobilenoErr=$cpassErr=$passErr = "";  
    $fname =$lname = $email = $mobileno = $agree =$cpass = $pass = "";
    
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
        $first_value= $fname;
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

        if(!isset($_POST["pass"])){
            $passErr="This field is required";
        }else{
            $pass=input_data($_POST["pass"]);
            if(!preg_match("/^[a-zA-Z0-9@]*$/",$pass)){
                $passErr="Only alphabets, @ and digits are allowed";
            }
            if (strlen ($pass) < 6) {  
                $passErr = "Password must contain atleast 6 characters.";  
                } 
        }

        if(!isset($_POST["cpass"])){
            $cpassErr="This field is required";
        }else{
            $cpass=input_data($_POST["cpass"]);
            if ($pass!=$cpass){
                $cpassErr="Re-enter password.";
            }
        }
        
        $_SESSION["name"]=$fname;
        $_SESSION["email"]=$email;
        $_SESSION["password"]=$pass;


    if(empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($mobilenoErr) && empty($passErr) && empty($cpassErr) ){
                header("Location: sqldb.php");
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
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
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
                        <label for="pass" class="col-md-2 col-form-label">Password<span class="error">*</span> 
                        </label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" id="pass" name="pass" maxlength="12"
                            placeholder="Password(Min 6 characters)">
                            <span class="error"> <?php echo $passErr; ?> </span> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cpass" class="col-md-2 col-form-label">Confirm Password<span class="error">*</span> 
                        </label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" id="cpass" name="cpass" maxlength="12"
                            placeholder="Confirm Password">
                            <span class="error"> <?php echo $cpassErr; ?> </span> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cpass" class="col-md-2 col-form-label">Select image to upload:</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control" id="file" name="file" >
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
                            <button type="submit" class="btn btn-primary" name="Submit" value="Upload">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
                <?php 
                    if(isset($_POST['Submit']))
                    { 
                    $filepath = "images/" . $_FILES["file"]["name"];

                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
                    {
                       echo "<img src=".$filepath." height=200 width=300 />";
                    } 
                    else 
                    {
                       echo "Error !!";
                    }
                    } 
                ?>
            </div>
        </div> 
    </div>

    <?php include("footer1.html"); ?>

</body>
</html>