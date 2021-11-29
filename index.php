<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TechMart-Shopping</title>
    <link rel="stylesheet" href="homeitt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <script>
        function stickyMenu(){
            var sticky = document.getElementById('Sticky');
           if(window.pageYOffset>220){
        }
        else{
            sticky.classList.remove(sticky)
        }
    }
    window.onscroll=function(){
        stickyMenu();
    }
    </script>

</head>
<body>
    <div class="parallax">
        <div class="page-title">
            TechMart-Shopping </div>
    </div>
        <div class="menu" id="sticky">
            <ul class="menu-ul">
               <a href="#" class="a-menu" id="h"><li>Home</li></a>
               <a href="decoration_home.html" class="a-menu" id="d"><li>Decoration</li></a>
               <a href="cloth_home.html" class="a-menu" id="cl"><li>Clothes</li></a>
               <a href="Appliance_home.html" class="a-menu" id="h"><li>Home-Appliance</li></a>
               <a href="electronics_home.html" class="a-menu" id="e"><li>Electroincs</li></a>
               <a href="addtocart.php" class="a-menu" id="c"><li>Cart</li></a>
               <a href="signin.html" class="menu" id="sign"><li>Sign-In</li></a>
            </ul>

        
    </div>
    <div class="container">
    <a href="electronics_home.php">
        <div class="categories">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6GBqdk9o1hqpJtH1uOq0aXtAAxLzRngufNZR-W48vfanADcqEgoLhvaHVt9t1v8GLlXo&usqp=CAU" class="item.image" >
            <div class="image-title">Electroincs</div>
        </div>

    </a>
    <a href="decoration_home.html">
        <div class="categories">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzf6SiTr3lWJiDEOOHKzISKJuiZZpVXOYnyQ&usqp=CAU" class="item.image" >
            <div class="image-title">Decoration</div>
        </div>

    </a>
    <a href="cloth_home.html">
        <div class="categories">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOWkJ9tM9xsXiRCXqbrBK9lgdT0zcjZokMT_LQ_GjvYpUUnOBUfgN9gq6l-s8T5msmBaQ&usqp=CAU" class="item.image" >
            <div class="image-title">Clothes</div>
        </div>

    </a>
    <a href="Appliance_home.html">
        <div class="categories">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs1RYHqSVDDIa-z64KSF6c1mmHL-7Vr_yh6xDIV4bY8qBe40FkR-nbx9him3Rp-nkxhXI&usqp=CAU" class="item.image" >
            <div class="image-title">Home-Appliance</div>
        </div>

    </a>

   
</div>
<div><a href="">ChatBox</a></div>

<?php include('footer.html');?>
</body>
</html>


