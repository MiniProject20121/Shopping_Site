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
              <img src = "https://m.media-amazon.com/images/I/71DuofqGR8L._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/61n1VwZjB-L._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/61eeCD3QdrL._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/71VBg3TNu-L._SL1500_.jpg" alt = "Appliances image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/71DuofqGR8L._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/61n1VwZjB-L._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/61eeCD3QdrL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/71VBg3TNu-L._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title"> Side-by-Side Door Refrigerator</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.3(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹40,999.00</span></p>
            <p class = "new-price">Price: <span>₹20,999.00 (50%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h3>About this item</h3>
            <ul>
            <li> Side-by-side refrigerator with Water Dispenser and Auto Defrost technology that prevents excess ice build up automatically </li>
            <li> 564 L capacity: Suitable for the daily requirements of a family with 5 or more members; Please note that Left side of the refrigerator is Freezer & right side is regular Fridge</li>
            <li> Warranty: 1 year on product & 5 years on compressor for malfunction arising from manufacturing defects. No need to call anyone and wait in a queue. Hassle free process. Paperless Experience with complete visibility to every step of your warranty claim  </li>
            <li> Comes with in-built LED Display Panel that allows instant control and access to the temperature settings, making it convenient and easy to use</li>
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