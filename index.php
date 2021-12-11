<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TechMart-Shopping</title>
    <link rel="stylesheet" href="homeitt.css">
    
	    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

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
            <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt=""></a><br>
            <a class="a-menu" href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?>
        </div>
        <?php } ?>

    
    

   
</div>
<?php include('includes/footer.html');?>
</body>
</html>



