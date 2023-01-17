<?php

// Starting session
session_start();
// connecting to database
include 'connect.php';

// Sending data to database
if(isset($_POST['loginsubmit']))
{
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

    $sql="select * from `students` where email='$email'";

    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count)
    {
       // Verifying data from database
        $email_pass = mysqli_fetch_assoc($result);
        $db_pass = $email_pass['password'];
        // $pass_decode = password_verify($password,$db_pass);

        $_SESSION['email']=$email_pass['email'];

        // echo "<script>alert('$pass_decode , $db_pass')</script>";
        if($password==$db_pass)
        { 
            //  $password==$db_pass
            // echo '<script>alert("Login Succesfull")</script>';
           header('location:homelogin.php');
           exit;
        }
        else
        {
            echo '<script>alert("Login Failed 🤪 !!\nPlease 🤗 enter a valid Password.")</script>';
            // die(mysqli_error($con));
        }
    }
    else
    {
        echo '<script>alert("Login Failed 🤪 !! \nPlease 🤗 enter a valid email address.")</script>';
        // die(mysqli_error($con));
    }
} ?>