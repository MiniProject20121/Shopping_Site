<?php
// session_start();
$phone=$_POST['phone'];
$password=$_POST['password'];
$connection=mysqli_connect('localhost','root','','mini_project');
if(!$connection){
    echo "Connection Not Established";
}
else{
    $query="SELECT * FROM users WHERE phoneno='$phone' AND password='$password'";
    $result=mysqli_query($connection,$query);
    $count=mysqli_num_rows($result);
    if($count!=0){
        echo "<script>alert('Welcome To TechMart Shopping')</script>";
        header("location:home.html");
    }
    else{
        echo "<script>alert('Invalid Details')</script>";
        header("refresh:2;url=signin.html");
    }
}
?>