<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aroundtheworld";
 
$conn= mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}else{

    $fname=$_SESSION["name"];
    $mail=$_SESSION["email"];
    $pass=$_SESSION["password"];

    $sql="INSERT INTO users(uidUsers, emailUsers, pwdUsers) VALUES(?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        exit();
    }
    else{
        //hash password
        $hashedpwd=password_hash($pass, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sss",$fname,$mail,$hashedpwd);
        mysqli_stmt_execute($stmt);
        header("Location: home.php");

    }


mysqli_stmt_close($stmt);
mysqli_close($conn);
}

?>