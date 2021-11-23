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
              <img src = "https://m.media-amazon.com/images/I/61TnX0PmqES._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/61vc1+N5evS._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/51T8OIxQQfS._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/51zvGnX4BjS._SL1500_.jpg" alt = "mobile image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/61TnX0PmqES._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/61vc1+N5evS._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/51T8OIxQQfS._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/51zvGnX4BjS._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">OnePlus Nord 2 5G</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "new-price">Price: <span>₹29,999.00</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this item</h2>
            <ul>
                <li>Camera: Sony IMX 766 50MP+8MP+2MP AI Triple Camera with 4K@30FPS|1080p video at 30/60 fps | 32MP Front camera with 1080p video at 30/60 fps | 
                    Super Slow Motion: 1080p video at 120 fps, 720p video at 240 fps | Time-Lapse: 1080p 120fps;720p 240fps</li>
                <li>Chipset: 3GHz Arm Cortex-A78 provides the most immediate response</li>
                <li>Display: 6.43-inch, 90Hz Fluid AMOLED display | Resolution: 2400 x 1080 pixels | 410 PPI | Aspect Ratio: 20:9 | Support sRGB, Display P3</li>
                <li>Memory, Storage & SIM: 8GB RAM | 128GB internal memory on UFS 3.1 storage system.</li>
                <li>Battery: Dual Cell 4500mAH lithium-ion battery</li>
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