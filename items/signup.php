<?php
$connection=mysqli_connect('localhost','root','1234','mini_project');
if(!$connection){
    echo "Connection Not Established";
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['mobile_no'];
$password=md5($_POST['pass']);
$insert="INSERT INTO users (name,email,password,phoneno) VALUES ('$name','$email','$password','$phone')";
if(mysqli_query($connection,$insert)){
    echo "<script>alert('Welcome To TechMart Shopping')</script>";
    header("location:signin.html");
}
else{
    echo "<script>alert('Check The details')</script>";
    header("location:signup.html");
}
?>