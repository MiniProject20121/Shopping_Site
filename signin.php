<?php
// session_start();
// error_reporting(0);
include('include/config.php');
if(isset($_POST['login'])){
     
        $phone=$_POST['phone'];
        $password=md5($_POST['password']);
        $sql="SELECT name FROM users WHERE  phoneno='$phone' AND password='$password'";
        if(mysqli_query($connection,$sql)){
            echo "<script>alert('Welcome');</script>";
            header("location:home.html");
        }
        else{
            echo "<script>alert('Invalid Details');</script>";
        }

}
?>