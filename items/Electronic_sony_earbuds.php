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
              <img src = "https://m.media-amazon.com/images/I/61zKkP36kDL._SL1500_.jpg" alt = "earphone image">
              <img src = "https://m.media-amazon.com/images/I/8147MdN76RL._SL1500_.jpg" alt = "earphone image">
              <img src = "https://m.media-amazon.com/images/I/71mf7oQVh7L._SL1500_.jpg" alt = "earphone image">
              <img src = "https://m.media-amazon.com/images/I/81pxwkCL1ML._SL1500_.jpg" alt = "earphone image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/61zKkP36kDL._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/8147MdN76RL._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/71mf7oQVh7L._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/81pxwkCL1ML._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">Sony WF-1000XM3</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹19,990.00</span></p>
            <p class = "new-price">Price: <span>₹14,990.00  (25%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this item</h2>
            <ul>
            <li>Digital Noise Cancellation : Industry leading Noise Cancellation lends a personalized, virtually soundproof experience</li>
            <li>Battery Life: Battery Life up-to 24 hrs with NC ( 6 hrs Earbuds & 18 hrs Carrying Case ) & 32 hours without NC ( 8 hrs Earbuds & 24 hrs Carrying Case )</li>
            <li>Built-In Mic : Conversation flows freely with easy, hands-free calling. The WF-1000XM3 headphones deliver clearer voice quality and you can take calls using either, or both, of the earbuds</li>
            <li>Touch Controls : Control music tracks and volume, activate your voice assistant and take phone calls</li>
            <li>Wearing Detection : Just take your earbuds from case and wear it, it’s ready, Intelligent auto-power off through IR sensor which detects earbuds’ status</li>
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