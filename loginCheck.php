<?php 
    $mailuid=$_POST['emailid'];
    $password1=$_POST['pass'];


        // $hashedpwd=password_hash($password1, PASSWORD_DEFAULT);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "aroundtheworld";
        
        $conn= mysqli_connect($servername,$username,$password,$dbname);

        if(!$conn){
            die("Connection failed: ".mysqli_connect_error());
        }else{

        $sql= "SELECT * FROM users WHERE emailUsers='$mailuid'  ";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);

        if($row["emailUsers"] == $mailuid){
            if( password_verify($password1 ,$row["pwdUsers"]))
            {
                    $cookie_name = "user";
                    $cookie_value = $row["uidUsers"];
                    setcookie($cookie_name, $cookie_value, time() + (3600), "/");
                header("Location: finalpage.php");
            }
        }else{
            echo "Failed to login";
        }
        
        mysqli_close($conn);
        }


?>