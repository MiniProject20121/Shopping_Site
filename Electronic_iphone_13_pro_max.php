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
              <img src = "https://m.media-amazon.com/images/I/61i8Vjb17SL._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/81DzfVDR-lL._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/81woDMsj8DL._SL1500_.jpg" alt = "mobile image">
              <img src = "https://m.media-amazon.com/images/I/61F2F2cZ0OL._SL1500_.jpg" alt = "mobile image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/61i8Vjb17SL._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/81DzfVDR-lL._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/81woDMsj8DL._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/61F2F2cZ0OL._SL1500_.jpg" alt = "mobile image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">Apple iPhone 13 Pro (128GB)</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹1,19,900.00</span></p>
            <p class = "new-price">Price: <span>₹1,13,900.00 (5%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this item</h2>
            <ul>
                <li>17 cm (6.7-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel</li>
                <li>Cinematic mode adds shallow depth of field and shifts focus automatically in your videos</li>
                <li>Pro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras; LiDAR Scanner; 6x 
                    optical zoom range; macro photography; Photographic Styles, ProRes video, Smart HDR 4, Night mode, 
                    Apple ProRAW, 4K Dolby Vision HDR recording</li>
                <li>12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording</li>
                <li>Durable design with Ceramic Shield</li>
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