<?php

$con=mysqli_connect("localhost","root","","asiacup_ticketbooking");
if(!$con)
{
    // echo "connection successfull";
die(mysqli_error($con));
}

?>