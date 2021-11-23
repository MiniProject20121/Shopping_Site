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
              <img src = "https://m.media-amazon.com/images/I/71hmqIQJFdL._SL1200_.jpg" alt = "laptop image">
              <img src = "https://m.media-amazon.com/images/I/71-42zOwiUL._SL1200_.jpg" alt = "laptop image">
              <img src = "https://m.media-amazon.com/images/I/61h2cNhlTeL._SL1500_.jpg" alt = "laptop image">
              <img src = "https://m.media-amazon.com/images/I/71Iq7YYCclL._SL1200_.jpg" alt = "laptop image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/71hmqIQJFdL._SL1200_.jpg" alt = "laptop image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/71-42zOwiUL._SL1200_.jpg" alt = "laptop image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/61h2cNhlTeL._SL1500_.jpg" alt = "laptop image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/71Iq7YYCclL._SL1200_.jpg" alt = "laptop image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">HP Pavilion 14-dv0054TU</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹72,536.00</span></p>
            <p class = "new-price">Price: <span>₹66,990.00 (8%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this item</h2>
            <ul>
                <li>Processor: 11th Gen Intel Core i5-1135G7 (up to 4.2 GHz with Intel Turbo Boost Technology, 8 MB L3 cache, 4 cores)</li>
                <li>Operating System & Software: Windows 10 Home 64 – free upgrade to Windows 11 when available| Microsoft Office Home & Office 2019, Alexa Built-in</li>
                <li>Display: 14-inch FHD (1920x1080) IPS Anti-Glare Panel with 45% NTSC, 250 nits, 157ppi</li>
                <li>Memory & Storage: 16GB DDR4-3200 SDRAM (2x8 GB) | 512 GB PCIe NVMe M.2 SSD</li>
                <li>Graphics: Intel Iris Xe Graphics</li>
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