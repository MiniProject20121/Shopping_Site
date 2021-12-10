<?php
include('includes/config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TechMart-Shopping</title>
    <link rel="stylesheet" href="homeitt.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">
        <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<!-- Demo Purpose Only. Should be removed in production : END -->

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
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

<header class="header-style-1">
<?php include('includes/top-header.php');?>
</header>

    <div class="parallax">
        <div class="page-title">
            TechMart-Shopping </div>
    </div>
        <div class="menu" id="sticky">
     
           
            <ul class="menu-ul">

               <li><a href="#" class="a-menu" id="h"><li>Home</li></a></li>
               <a href="my-cart.php" class="a-menu" id="c"><li>Cart</li></a>
               <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
while($row=mysqli_fetch_array($sql))
{
    ?>
    <li>
				<a class="a-menu" href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
			
			</li>
			<?php } ?>   
            </ul>

        
    </div>
    <div class="container">
    <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
while($row=mysqli_fetch_array($sql))
{
    ?>
        <div class="categories">
        <a class="a-menu" href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
        </div>
        <?php } ?>

    
    

   
</div>
<div><a href="">ChatBox</a></div>

<?php include('footer.html');?>
</body>
</html>



