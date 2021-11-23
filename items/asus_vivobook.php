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
              <img src = "https://m.media-amazon.com/images/I/71WuDXpTAlL._SL1500_.jpg" alt = "laptop image">
              <img src = "https://m.media-amazon.com/images/I/710ozlFYx3L._SL1500_.jpg" alt = "laptop image">
              <img src = "https://m.media-amazon.com/images/I/81aXcizNWyS._SL1500_.jpg" alt = "laptop image">
              <img src = "https://m.media-amazon.com/images/I/71B+WXvkFKS._SL1500_.jpg" alt = "laptop image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/71WuDXpTAlL._SL1500_.jpg" alt = "laptop image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/710ozlFYx3L._SL1500_.jpg" alt = "laptop image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/81aXcizNWyS._SL1500_.jpg" alt = "laptop image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/71B+WXvkFKS._SL1500_.jpg" alt = "laptop image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">ASUS VivoBook 14</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹63,990.00</span></p>
            <p class = "new-price">Price: <span>₹50,990.00 (20%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this item</h2>
            <ul>
                <li>Processor: 10th Gen Intel Core i5-1035G1, 1.0 GHz Base Speed, Up to 3.6 GHz Turbo boost Speed, 4 cores, 8 Threads, 6MB Cache</li>
                <li>Memory & Storage: 8GB (4GB onboard + 4GB SO-DIMM) DDR4 3200MHz RAM, Upgradeable up to 12GB using 1x SO-DIMM Slot with | Storage: 512GB SSD M.2 NVMe PCIe 3.0 with empty 2.5-inch SATA slot for HDD/SSD Upgrade Up to 1TB capacity.</li>
                <li>Display: 35.56 cm LED-Backlit LCD, FHD (1920 x 1080) 16:9, 220nits, NanoEdge bezel, Anti-Glare Plane with 45% NTSC, 82% Screen-To-Body Ratio</li>
                <li>Graphics: Integrated Intel UHD Graphics</li>
                <li>I/O Ports: 1x HDMI 1.4 | 1x 3.5mm Combo Audio Jack | 1x USB 3.2 Gen 1 Type-A | 1x USB 3.2 Gen 1 Type-C | 2x USB 2.0 Type-A | Micro SD card reader</li>
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