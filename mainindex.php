<?php
include("connect.php");
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $date=date('y-m-d',strtotime($_POST['date']));
    $arena=$_POST['arena'];
    $payment=$_POST['payment'];

// Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
        alert('Invalid email address');
        window.location='index.php';
        </script>";
        exit(); // Exit the script if email is invalid.
    }

    $sql="insert into `ticketbooking` (username,email,mobile,password,date,arena,payment) values ('$username','$email','$mobile','$password','$date','$arena','$payment')";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>
        alert('ticket successfully booked');
        </script>";
        echo "<script>
        window.location='index.php';
        </script>";
    }
    else
    {
        die(mysqli_error($con));
    }

}
?>