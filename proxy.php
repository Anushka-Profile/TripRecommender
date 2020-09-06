<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">
<center>
<?php
    $_SESSION["name"]="Anushka Darade";
    $_SESSION["rollno"]="1814012";
    $_SESSION["branch"]="IT";
    $_SESSION["sem"]="5";
    echo "<h1>Hi there!</h1><br>";
    echo "<h1>Session has been initiated.....</h1><br><br>";
    echo "<h2>click on this button</h2>";
?>
<form action='proxy1.php'>
    <button type="submit">
        Check here!
    </button>
</form>
</center>
</body>
</html>