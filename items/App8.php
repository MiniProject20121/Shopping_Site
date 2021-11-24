
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
              <img src = "https://m.media-amazon.com/images/I/51tjMeONVoL._SL1044_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/715nCPe3z-L._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/81O7hDHCHDL._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/919jmZUABtL._SL1500_.jpg" alt = "Appliances image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/51tjMeONVoL._SL1044_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/715nCPe3z-L._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/81O7hDHCHDL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/919jmZUABtL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title"> Solimo Plastic 500 ml Chopper   </h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.3(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹1000.00</span></p>
            <p class = "new-price">Price: <span>500.00 (50%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h3>About this item</h3>
            <ul>
            <li>Handy vegetable and fruit chopper</li>
            <li> Equipped with 3 high-quality sharp stainless steel blades for easy chopping </li>
            <li> Volume capacity: 500 ml  </li>
            <li>   Compact size of 13.5 cm x 13.5 cm x 9cm, which can be stored easily in the kitchen </li>
           <li> Individual parts (blades, container, and the lid) are easy to maintain and clean separately </li>
           <li>Easy strong pulley mechanism to chop all types of fruits and vegetables effortlessly </li>
           <li>4 locks on the lid to help lock in safely while in use </li>
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