<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <meta http-equiv="x-ua-compatible" content="ie=edge"> -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- <link href="css/style.css" rel="stylesheet">  -->
        
        <title>AroundTheWorld</title>
    <style>
        .error{color: #FF0001;}   
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">AroundTheWorld</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">About </a>
                <a class="nav-item nav-link" href="#">Contact </a>
                </div>
            </div>
        </div>
    </nav>



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