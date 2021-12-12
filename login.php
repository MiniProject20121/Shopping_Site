<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="index.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['name'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="login.php";
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid email id or Password";
exit();
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-IN</title>
    <style>
        html{
            overflow: hidden;
        }
        body{
            margin: 0px;
            padding: 0px;
            background: url(https://media.istockphoto.com/photos/smart-phone-online-shopping-in-woman-hand-network-connection-on-picture-id973132790?b=1&k=20&m=973132790&s=170667a&w=0&h=munFVmkHUEeVUtDCLof-LhjOhoM0vDUhoRdw0lLj62c=);
            background-size: cover;
            background-position:center;
            background-repeat: no-repeat;
            height: 103vh;
            font-family: sans-serif;
            justify-content:space-evenly;
        }
        .loginbox{
            width: 350px;
            height:430px;
            background: rgb(253, 206, 206);
            color: rgb(179, 48, 48);
            top: 12% ;
            left:40%;
            position:absolute;
            translate: translate(-50%,-50%);
           text-align: center;
           padding: 70px 30px;
           border-radius: 50px;



        }
         .avatar{
                width: 100px;
                height: 100px;
                border-radius: 50%;
                position:relative;
                top: -40px;
                left:calc(-150% -150px);

       }
       h1{
           margin: 0px;
           text-align: center;
           font-size: 20px;
       }
       .loginbox p{
           margin: 0px;
           padding: 0px;
           font-weight: bold;

       }
       .loginbox input{
           width: 100%;
           margin-bottom: 20px;

       }

       .loginbox input[type="text"], input[type="password"]{
           border:none;
           border-bottom:1px solid #fff;
           background:transparent;
           outline:none;
           height:40px;
           font-size:16px;
       }
       .loginbox input[type="submit"]{
           border : none;
           outline: none;
           height: 40px;
           background: #fb2525;
           color: #fff;
           font-size: 18px;
           border-radius: 20px;
       }
       .loginbox input[type="submit"]:hover{
           cursor: pointer;
           background: #ffc107;
           color:#000;

       }
       .loginbox a {
           text-decoration: none;
           font-size: 12px;
           line-height: 20px;
           color:darkblue;
       }
       .loginbox a:hover {
           color:red;

       }

    </style>
</head>

<body>
    <form action="" method="POST">
    <div class="loginbox">
        <img src="https://icon-library.com/images/log-on-icon/log-on-icon-8.jpg" alt="" class="avatar">
        <h1>SIGN-IN</h1><br>
        

            <p>Email-ID</p>
            <input type="text" name="email" placeholder="Enter Email-ID" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required >
            <br><br>
            <input type="submit" value="SIGN-IN" name="login">

            <a href="forgot-password.php"> Forgot your password? </a><br>
            <p>or</p>
            <a href="signup.php">Don't have an Account? <br>SIGN-UP</a><br>
            <a href="index.php">Home</a>
        </div>
    </form>
</body>
</html>
