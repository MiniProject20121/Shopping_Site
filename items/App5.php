
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
              <img src = "https://m.media-amazon.com/images/I/51qNhKjuFPL._SL1000_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/81uRgIf9l+L._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/81uRgIf9l+L._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/81uraGdLuDL._SL1500_.jpg" alt = "Appliances image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/51qNhKjuFPL._SL1000_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/715Rp9i3eSL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/81uRgIf9l+L._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/81uraGdLuDL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title"> Philips GC181 Heavy Weight 1000-Watt Dry Iron  </h2>
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
            <li>Powerful performance : Heavy soleplate that is built to las  </li>
            <li>Easy to experience : Easy to understand temperature settings </li>
            <li> High wattage : 1000 watt; Power cord length:1.8m ; Voltage: 220-240 V, Cord freedom (swivel): 360 degree cord freedom  </li>
            <li> Auto off pilot light  </li>
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