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
              <img src = "https://m.media-amazon.com/images/I/81Vr3jzftaL._SL1500_.jpg" alt = "laptop image">
              <img src = "https://m.media-amazon.com/images/I/71os9ykAxyL._SL1500_.jpg" alt = "laptop image">
              <img src = "https://m.media-amazon.com/images/I/71QiAxDbj4L._SL1500_.jpg" alt = "laptop image">
              <img src = "https://m.media-amazon.com/images/I/71M+auM6NtL._SL1500_.jpg" alt = "laptop image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/81Vr3jzftaL._SL1500_.jpg" alt = "laptop image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/71os9ykAxyL._SL1500_.jpg" alt = "laptop image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/71QiAxDbj4L._SL1500_.jpg" alt = "laptop image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/71M+auM6NtL._SL1500_.jpg" alt = "laptop image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">ASUS ROG Strix G17</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹1,02,990.00</span></p>
            <p class = "new-price">Price: <span>₹79,990.00 (22%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this item</h2>
            <ul>
                <li>Processor: AMD Ryzen 7 4800H Processor, 2.9 GHz Base Speed, Up to 4.2 GHz Max Boost Speed, 8 Cores, 16 Threads, 8MB L3 Cache</li>
                <li>Memory: 8GB SO-DIMM DDR4 3200MHz, Support Up to 32GB Using 2x SO-DIMM slots with | Storage: 512GB M.2 NVMe PCIe 3.0 SSD with additional empty 1x M.2 2280 PCIe 3.0 SSD Slot</li>
                <li>Graphics: Dedicated NVIDIA GeForce GTX 1650 GDDR6 4GB VRAM</li>
                <li>Display: 17.3-inch (43.94 cms) FHD (1920 x 1080) 16:9, 250nits, 144Hz Refresh Rate, Adaptive-Sync technology.</li>
                <li>I/O Port: 1x RJ45 LAN port, 1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery / G-SYNC</li>
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