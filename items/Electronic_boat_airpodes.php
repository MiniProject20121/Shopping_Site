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
              <img src = "https://m.media-amazon.com/images/I/51bozEwzz-L._SL1500_.jpg" alt = "earphone image">
              <img src = "https://m.media-amazon.com/images/I/61Y9bgweggL._SL1500_.jpg" alt = "earphone image">
              <img src = "https://m.media-amazon.com/images/I/71VcSsIqn4L._SL1500_.jpg" alt = "earphone image">
              <img src = "https://m.media-amazon.com/images/I/61hDSWMm+7L._SL1500_.jpg" alt = "earphone image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/51bozEwzz-L._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/61Y9bgweggL._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/71VcSsIqn4L._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/61hDSWMm+7L._SL1500_.jpg" alt = "earphone image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">boAt Airdopes 621</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹7,990.00</span></p>
            <p class = "new-price">Price: <span>₹2,999.00 (62%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this item</h2>
            <ul>
            <li>Airdopes 621 is equipped with our IWP Technology so that whenever the earbuds are inside the case and you open the lid, 
                the earbuds power on automatically.</li>
            <li>It is IPX7 rated for resistance against water and sweat to provide a carefree listening experience</li>
            <li>Keep dancing to the tunes of your mood all day long as the Airdopes 621 is packed with a mountaineous playback of upto 150 hours 
                with its case, providing upto 5.5 hours of playtime per charge. With its 2600mAh humongous case capacity, it can also function 
                as a Powerbank in times of emergency. Not only this but its carry cum charge case comes with a Digital Battery indicator sa well.</li>
            <li>It has Bluetooth v5.0 with a range of 10m and is compatible with Android & iOS</li>
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