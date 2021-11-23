<?php
$connection=mysqli_connect('localhost','root','1234','mini_project');
if(!$connection){
    echo "Connection Not Established";
}
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
?>