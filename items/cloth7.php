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
  <?php include('header_cloth.html');?>
  <body>
    
    <div class = "card-wrapper">
      <div class = "card">
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15874816/2021/10/20/2ffb972f-1218-417b-94f5-80cfd584eb021634725079555WomenYellowWovenDesignJamawarShawl1.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15874816/2021/10/20/afd2721a-f71a-4728-b5cd-4cd9bc4f51f01634725079165WomenYellowWovenDesignJamawarShawl2.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15874816/2021/10/20/ab644317-9f0d-4e86-9400-32bbd3fbea521634725079414WomenYellowWovenDesignJamawarShawl3.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15874816/2021/10/20/ba0b5e59-ccb0-40ff-9ad2-5aad2be7aa1f1634725079282WomenYellowWovenDesignJamawarShawl4.jpg" alt = "cloth image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15874816/2021/10/20/2ffb972f-1218-417b-94f5-80cfd584eb021634725079555WomenYellowWovenDesignJamawarShawl1.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15874816/2021/10/20/afd2721a-f71a-4728-b5cd-4cd9bc4f51f01634725079165WomenYellowWovenDesignJamawarShawl2.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15874816/2021/10/20/ab644317-9f0d-4e86-9400-32bbd3fbea521634725079414WomenYellowWovenDesignJamawarShawl3.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15874816/2021/10/20/ba0b5e59-ccb0-40ff-9ad2-5aad2be7aa1f1634725079282WomenYellowWovenDesignJamawarShawl4.jpg" alt = "cloth image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">Pashmoda
          </h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>3.8(3.4k)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹1395.00</span></p>
            <p class = "new-price">Price: <span>₹948.00 (32%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this</h2>
            <ul>
            <li>Women Yellow Woven Design Jamawar Shawl</li>
            <li>This ostentatious Kashmiri jamawar shawl is adorned with intricate and meticulous paisley and floral woven designs inspired by mughal motifs and centuries of Kashmiri artistry.
               This shawl also comes packed in an elegant Pashmoda gift box which complements its royal feel and makes it ideal for gifting</li>
            <li>Size & Fit: 
              Length: 2.03 m 
              Width 1.01 m</li>
            <li>
              Material & Care: Wool Blend.
              Dry Clean</li>
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
