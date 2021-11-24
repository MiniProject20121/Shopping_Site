<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <?php include('header_deco.html')?>
  <body>
    <div class = "card-wrapper">
      <div class = "card">
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
                <img src = "https://m.media-amazon.com/images/I/71j5sS2p5+L._SL1500_.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/51gYpUHS5ZL.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/51gYpUHS5ZL.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/51nHFFzWgzL.jpg" alt = "shoe image">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                    <img src = "https://m.media-amazon.com/images/I/71j5sS2p5+L._SL1500_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/51gYpUHS5ZL.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/51gYpUHS5ZL.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/51nHFFzWgzL.jpg" alt = "shoe image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">Star Curtain LED Light</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
        </div>

        <div class = "product-price">
          <p class = "last-price">M.R.P.: <span>₹599</span></p>
          <p class = "new-price">Price: <span>₹499(11%)</span></p>
        </div>
        <div class="product-detail">
          <hr>
          <h2>About this item</h2>
          <ul>
          <li>(8 Lighting Modes : This Star Light LED curtain light is one button control, press the button you can select 8 different modes to meet your diverse needs)</li>
          <li>Easy to use : 12 Stars(2 sizes), total 138pcs LED curtain string lights, Low voltage and ul Listed power supply, directly plug in and unplug for power on and off</li>
          <li>High Quality : The star curtain lights are made of 100% Copper Wire Material and never overheat no matter how long you have them on></li>
          <li>Perfect to decorate your house, room, garden, tree,.6.6Ft x 3.3Ft star curtain string lights with 138 LEDs, power line length is 5.3Ft. For christmas, diwali, wedding ceremony, valentine's day etc.        </li>
          <li>The string lights are IP44 Waterproof. </li>
          </ul>
          </div>
        <div class = "purchase-info">
          Quantity: 
          <input type = "number" min = "0" value = "1">
          <button type = "button" class = "btn">
            Add to Cart <i class = "fas fa-shopping-cart"></i>
          </button>
          <button type = "button" class = "btn">Buy Now</button>
        </div>
      </div>
    </div>
  </div>

  
  <script src="script.js"></script>
</body>
<?php include('footer.html');?>
</html>