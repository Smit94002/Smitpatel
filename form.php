<?php
include_once "connection.php";
if(isset($_POST['btn']))
{
    $fname=@$_POST['fname'];
    $email=@$_POST['email'];
    $subject=@$_POST['subject'];
    $message=@$_POST['message'];
    
    $q="insert into form_data values('$fname','$email','$subject','$message')";
    
   if(mysqli_query($con,$q))
    {
        echo '<script>alert("Send message sucessfully!")</script>';
        echo"<script>window.location='index.php';</script>";
       
   }
    else{
        echo"Data insert not successfully";
    }
}7
?>