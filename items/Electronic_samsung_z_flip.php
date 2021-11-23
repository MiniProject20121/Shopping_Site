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
              <img src = "https://m.media-amazon.com/images/I/71f2I8cltBL._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/61xDJ80iKrL._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/71BdTQXrrQL._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/71bvBFomo-L._SL1500_.jpg" alt = "mobile image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/71f2I8cltBL._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/61xDJ80iKrL._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/71BdTQXrrQL._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/71bvBFomo-L._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">Samsung Galaxy Z Flip 5G</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹99,999.00</span></p>
            <p class = "new-price">Price: <span>₹88,999.00 (11%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this item</h2>
            <ul>
            <li>5G Ready powered by Qualcomm Snapdragon 888 Octa-Core processor, 8GB RAM, 256GB internal memory (UFS 3.1) , Android operating system and dual SIM (one nano Sim &amp; one e-Sim)</li>
            <li>Dual Rear Camera Setup - 12 MP Ultra Wide Camera: FF F2.2, FOV: 123°, Pixel Size: 1.12 µm +12 MP Wide Camera: Dual Pixel, F1.8, Pixel Size: 1.4µm OIS | Front Camera: 10 MP, 1.22µm FF, F2.4</li>
            <li>Main Display -6.7" Dynamic AMOLED 2X, Adaptive 120Hz(10~120Hz), FHD+ Infinity-O Display(2,640 x 1,080) 22:9 ratio, 425PPI| Cover Display - 1.9” Super AMOLED 60Hz (260 x 512), 302PPI></li>
            <li>3,300 mAh Dual battery ( 930 + 2,370 mAh) Wired 15W / Wireless 10W Wireless PowerShare &amp; Fingerprint Sensor (side)</li>
            <li>IPX8 Rated, Dual Sim (1 Nano Sim + 1 eSim)</li>
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
</html>