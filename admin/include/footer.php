<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body{
            width: 100%;
            color: #000;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            position: relative;
            
        }
        .footer_width link{
            text-decoration: none;
            transition: .5s;
            color: #fff;
        }
        .footer_width{
            color: white;
        }
        h2{
            color: white;
        }
        ul, li{
            list-style: none;
        }
        footer{
            background-color:black;
            color: #fff;
        }
        .footer_info{
            width: 90%;
            margin: 0 auto;
            display: flex;
            padding: 50px 0;
        }
        
        .about_info .footer_width{
            padding:0 15px ; 
        }
        .footer_info h2{
            margin-bottom: 20px;
        }
        .about, .contact{
            width: 40%;
        }
        
        .link{
            width:20%;
        }
        .social-media{
            margin-top: 30px;
        }
        
        .social-media ul{
            display:flex ;
        }
        .social-media ul li a{
            display: inline-block;
            margin-right: 50px;
            width: 50px;
            height: 50px;
            padding-top: 12px;
            background-color: transparent;
            border: 1px solid #fff;
            color: white;
            text-align: center;
        
        }
        .social-media ul li a:hover{
            color: grey;
        
        }
        .link ul li a {
            margin-left: 5mm;
            display: block;
            margin-bottom: 15px;
            font-size: 18px;
            color: white;
        }
        
        
        .link ul li a:hover {
        color: grey;
        }
        
        .contact ul li{
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .contact ul li span{
            margin-right:15px ;
        }
        
        .copy-right{
            padding: 15px 0;
            text-align: center;
            background-color: rgb(31, 20, 20);
        
        }
        @media screen and (max-width:992px) {
            .about, .contact{
                width: 35%;
            }
            .link{
                width: 30%;        
            }
        }
        
        @media screen and (max-width) {
            .about, .contact, .link{
                width: 100%;
                margin-bottom: 30px;
        
            }
            .footer_info{
            flex-direction: column; 
            }
        }
    </style>
</head>
<body>
    <footer>
        <div class="footer_info">
            <div class="footer_width about">
                <h2>About</h2>
                <p>TechMart is an online store with a global presence. It provides a variety of product 
                    choices and provides a great user experience and splendid customer service. 
                </p>
                <div class="social-media">
                    <ul>
                    <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li> <a href="#"><i class="fab fa-instagram"></i></a><br>
                    <li><a href="#"><i class="fab fa-youtube"></i></a> </li>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="footer_width link">
                <h2>Quick Link</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.html">About</a></li>
                    <li><a href="admin/index.php">Admin</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer_width">
              <h2>Contact</h2>  
              <ul>
                 <li>
                     <span><i class="far fa-envelope"></i></span>
                     <a href="mailto:hello@techmartshopping.xyz">hello@techmartshopping.xyz</a>
                 </li>
                 <li>
                     <span><i class="fas fa-phone-volume"></i></span>
                     <a href="tel:+911234567890">+911234567890</a>
                 </li>
              </ul>
            </div>
        </div>
        <div class="copy-right">
            <p>Copyright &copy; 2021 Techmart Shopping. All rights reserved</p>
    </footer>
</body>
</html>