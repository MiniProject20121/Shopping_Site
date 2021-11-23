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
  <?php include('header_deco.html')?>
  <body>
    <div class = "card-wrapper">
      <div class = "card">
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
                <img src = "https://m.media-amazon.com/images/I/817o0VpUm1L._SL1500_.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/71CSxHhMpPL._SL1500_.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/91s33G2nbjL._SL1500_.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/711yr1GGY0L._SL1200_.jpg" alt = "shoe image">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                    <img src = "https://m.media-amazon.com/images/I/817o0VpUm1L._SL1500_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/71CSxHhMpPL._SL1500_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/91s33G2nbjL._SL1500_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/711yr1GGY0L._SL1200_.jpg" alt = "shoe image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">Turkish Moroccan Tea Light Candle</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
        </div>

        <div class = "product-price">
          <p class = "last-price">M.R.P.: <span>₹550</span></p>
          <p class = "new-price">Price: <span>₹349(61%)</span></p>
        </div>
        <div class="product-detail">
          <hr>
          <h2>About this item</h2>
          <ul>
          <li>Each glass candle pedestal is individually mouthblown and hand-finished by skilled craftsmen. Slight variations may occur in this unique tea light holder</li>
          <li>Brahmz tealight holder will enhance the natural warm light of candles, giving it a ethnic but timeless look. They can be a part of your overall décor, or as a favour for your guests.</li>
          <li>Each Votive in this set has 3.25” diameter (top) and 3ʺ height. Works with regular tea-light candles, also with small LED flameless tea lights, votive candle, pillar, tealight, floating, wick candles.</li>
          
          
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