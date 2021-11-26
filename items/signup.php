<?php
$connection=mysqli_connect('localhost','root','','mini_project');
if(!$connection){
    echo "Connection Not Established";
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['mobile_no'];
$password=md5($_POST['pass']);
$query="SELECT * FROM users WHERE phoneno='$phone' AND email='$email'";
$result=mysqli_query($connection,$query);
$count=mysqli_num_rows($result);
if($count==0){
    $insert="INSERT INTO users (name,email,password,phoneno) VALUES ('$name',$email','$password','$phone')";
    if(mysqli_query($connection,$insert)){
        echo "<script>alert('Welcome to TechMart Shopping')</script>";
        header("refresh:2;url=signin.html");
    }
    else{
        echo "<script>alert('Check Details')</script>";
        header("refresh:10;url=signup.html");
    }
}
else{
    echo "<script>alert('Data Already Inserted')</script>";
    header("refresh:3;url=signin.html");
}
?>