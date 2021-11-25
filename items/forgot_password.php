<?php
$phone=$_POST['mobile_no'];
$password=$_POST['password'];
$password_confirm=$_POST['password_confirm'];
$connection=mysqli_connect('localhost','root','1234','mini_project');
if(!$connection){
    echo "Connection Not Established";
}
else{
    if($password!=$password_confirm){
        echo "<script>alert('Password Didn't Match')</script>";
        header("refresh:1;url=forgot_passsword.html");
    }
    else{
        $update="UPDATE users SET password='$password_confirm' WHERE phoneno='$phone'";
        if(mysqli_query($connection,$update)){
            echo "<script>alert('Password Changed')</script>";
            header("refresh:1;url=signin.html");
        }
        else{
            echo "<script>alert('Password Not Changed')</script>";
            header("refresh:1;url=forgot_password.html");
        }
    }
}


?>