<?php

include("connect.php");

$username=$_POST["username"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$password=$_POST["password"];
$confirmPassword=$_POST["confirmPassword"];

// Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
        alert('Invalid email address');
        window.location='index.php';
        </script>";
        exit(); // Exit the script if email is invalid.
    }
if($password!=$confirmPassword)
{
    echo '<script>
    alert("passwords do not match");
    window.location="registration.php";
    </script>';
}
else{
    $sql="insert into `register` (username,email,mobile,password,confirmPassword) values ('$username','$email','$mobile','$password','$confirmPassword')";
  
    $result=mysqli_query($con,$sql);
    if($result)
    {
         echo '<script>
    alert("registration successfull");
    window.location="login.php";
    </script>';
    }
}
?>