<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TechMart Shopping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <?php include('header.html')?>
  <body>
    
    <div class = "card-wrapper">
      <div class = "card">
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "https://m.media-amazon.com/images/I/71MmJNwZcML._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/71ygvXY45TL._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/71dL4mqSl4L._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/81cOgwmMsxL._SL1500_.jpg" alt = "mobile image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/71MmJNwZcML._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/71ygvXY45TL._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/71dL4mqSl4L._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/81cOgwmMsxL._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">Samsung Galaxy Z Fold3 5G</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹1,71,999.00</span></p>
            <p class = "new-price">Price: <span>₹1,49,999.00 (13%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this item</h2>
            <ul>
                <li>5G Ready powered by Qualcomm Snapdragon 888 Octa-Core processor, 12GB RAM, 256GB internal memory , Android operating system and dual SIM (one nano Sim &amp; one e-Sim)</li>
                <li>Main Display - 19.19cm (7'6") Infinity Flex Display with an Under Display Camera, Dynamic AMOLED 2X  with Adaptive Refresh Rate. Cover Display - 15.82cm (6.2”) Infinity-O Display, Switchable 60/120Hz</li>
                <li>Triple Rear Camera (12 MP + 12 MP + 12 MP) | 10 MP Front Camera</li>
                <li>IPX8 Rated for Water Resistance,  Corning Gorilla Glass Victus, Armor Aluminium frame</li>
                <li>Fingerprint Sensor (side) & Facial recognition. Dual Sim (1Nano Sim + 1 Nano Sim/eSIM)</li>
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