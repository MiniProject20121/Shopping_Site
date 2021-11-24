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
              <img src = "https://m.media-amazon.com/images/I/61VqvZhg5IL._SL1500_.jpg" alt = "earphone image">
              <img src = "https://m.media-amazon.com/images/I/51espyoJJhS._SL1500_.jpg" alt = "earphone image">
              <img src = "https://m.media-amazon.com/images/I/613m4RIV-BS._SL1500_.jpg" alt = "earphone image">
              <img src = "https://m.media-amazon.com/images/I/61MzkwkFdrS._SL1500_.jpg" alt = "earphone image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/61VqvZhg5IL._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/51espyoJJhS._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/613m4RIV-BS._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/61MzkwkFdrS._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">Noise Air Buds</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹5,999.00</span></p>
            <p class = "new-price">Price: <span>₹1,799.00  (70%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this item</h2>
            <ul>
            <li>[full touch controls] : control music and volume with smart touch controls available on the earbuds. BT Supported Profile SBC, AAC</li>
            <li>[handsfree calling] : enjoy superior calling experience with distortion-free sound.</li>
            <li>[up to 20-hour playtime] : air buds offer a play time of up to 4 hours on a single charge and an additional 16 hours making a total play-time of up to 20 hours with the charging case.</li>
            <li>[ipx4 rated] : now sweat it out without worry, thanks to the ipx4 water-resistant rating.</li>
            <li>[bt 5.0 and quick pairing] : the bluetooth 5.0 ensures stable connectivity, better wireless range and super quick pairing right out of the box.</li>
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