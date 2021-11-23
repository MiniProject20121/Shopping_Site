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
  <?php include('header_homeApplia.html')?>
  <body>
    
    <div class = "card-wrapper">
      <div class = "card">
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "https://m.media-amazon.com/images/I/61si6MOR1AL._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/61Tnv-qODDL._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/71Ake8yGMsL._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/81z1DYURPAL._SL1500_.jpg" alt = "Appliances image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/61si6MOR1AL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/61Tnv-qODDL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/71Ake8yGMsL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/81z1DYURPAL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">   Multipurpose Vacuum Cleaner </h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.3(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹20,000.00</span></p>
            <p class = "new-price">Price: <span>₹10,000.00 (50%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h3>About this item</h3>
            <ul>
            <li>  </li>
            <li>Wet & Dry Cleaning: Has the ability to clean both wet and dry spills, which makes it extremely versatile. It completely does away with the need to carry separate equipment for wet and dry spills</li>
            <li> Wide range of accessories for different cleaning needs. It provides solution for efficient and hassle-free cleaning. The accessories provided are simple to use and convenient to store.  </li>
            <li>Top quality wheels for smooth mobility with rubber wheels to avoid marks on the floor </li>
            <li> 6 Month Warranty </li>
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