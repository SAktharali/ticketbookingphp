<?php

include("connect.php");
$username=$_POST["username"];
$mobile=$_POST["mobile"];
$password=$_POST["password"];

    $sql="insert into `login` (username,mobile,password) values ('$username','$mobile','$password')";
  
    $result=mysqli_query($con,$sql);
    if($result)
    {
         echo '<script>
    alert("login successfull");
    window.location="index.php";
    </script>';
    }
    else
    {
        die(mysqli_error($con));
    }
?>