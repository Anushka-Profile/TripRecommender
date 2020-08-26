<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $unameErr =$emailErr = $genderErr = $ageErr = "";
$fname = $lname = $uname = $email = $age = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
  
    if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["uname"])) {
    $unameErr = "Username is required";
  } else {
  	$uname = test_input($_POST["uname"]);
  	if (!preg_match("/^[a-zA-Z0-9@_]*$/",$uname)) {
  	  $unameErr = "Invalid Username (only letters, numbers and @_ are allowed)";
  } elseif (strlen($uname)<6) {
  	$unameErr = "Username must contain atleast 6 characters";
  } 
}

  if (empty($_POST["age"])) {
  	$ageErr = "Age is required";
  } else {
  	$age = test_input($_POST["age"]);

  	if (!preg_match("/^[0-9]*$/",$age)) {
  		$ageErr = "Numeric input only";
  	}
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($fnameErr) && empty($lnameErr) && empty($agErr) && empty($emailErr) && empty($genderErr) && empty($unameErr)) {
	header("Location: home.php");
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="minime.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patrick Hand">
	<script>

		function validateForm(){

			var names = /^[A-Za-z]+$/;
			var all = /^[a-zA-Z0-9@_]+$/;

			var fname = document.getElementById("fname").value;
			var lname = document.getElementById("lname").value;
			var uname = document.getElementById("uname").value;
			var age = document.signform.age.value;
			var email = document.signform.email.value;
			var atposition=email.indexOf("@");
			var dotposition=email.lastIndexOf(".");

			if (!names.test(fname)){  
			alert("Enter a valid first name");  
			  return false;  
			}

			else if(!names.test(lname)){  
			  alert("Enter a valid last name");  
			  return false;  
			}

			else if(!all.test(uname) || uname.value.length<6){
				alert("Invalid Username");
				return false;
			}

			else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){
			alert("Please enter a valid e-mail address");
			return false;
			}

			else if(isNaN(age)){
				document.getElementById("numloc").innerHTML="Enter numeric input only";
				return false;
			}

			else{
				return true;
			}



		}
	</script>
	</head>
<body>
	<div class="parallax">
		<b><div class="header">WELCOME TRAVELLER!!</div></b>
		<div class="container">
		<center><div class="h1">Sign Up</div></center>
		<p><span class="error">* required field</span></p>
			<form name ="signform" onsubmit="return validateForm()" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<input type="text" id = "fname" name="fname" placeholder="First Name" value="<?php echo $fname ?>">
				<span class="error">*<?php echo $fnameErr ?></span><br/>
				<input type="text" id = "lname" name="lname" placeholder="Last Name" value="<?php echo $lname ?>">
				<span class="error">*<?php echo $lnameErr ?></span><br/>
				<input type="text" id="uname" name="uname" placeholder="Username(atleast 6 charachters)" value="<?php echo $uname ?>">
				<span class="error">*<?php echo $unameErr ?></span><br/>
				<input type="text" name="age" maxlength="3" placeholder="Age" value="<?php echo $age ?>"><span id="numloc"></span>
				<span class="error">*<?php echo $ageErr ?></span><br/>
				<input type="email" name="email" placeholder="Email" value="<?php echo $email ?>">
				<?php if(isset($emailErr)) { ?>
					<span class="error">*<?php echo $emailErr ?></span>
				<?php } ?><br/>
				<input type="radio" name="gender" id="" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"><font size="3px">Female</font>
				<input type="radio" name="gender" <?php if (isset($gender) && $gender == 'male') echo 'checked'; ?> value="male"><font size="3px">Male</font>
				<input type="radio" name="gender" <?php if (isset($gender) && $gender == 'other') echo 'checked'; ?> value="other"><font size="3px">Other</font>
				<span class="error">* <?php echo $genderErr;?></span><br/><br/>
				<input class="up_btn" type="submit" name="signup" value="Sign Up"/><br/>
			</form>
			
			
</div>
</div>
</div>
</body>
</html>
