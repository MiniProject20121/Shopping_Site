<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Techmart Shopping</title>
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
                <img src = "https://m.media-amazon.com/images/I/81zMXqcnE3S._SL1500_.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/81dbL4MEZGS._SL1500_.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/91N1e0H6BUS._SL1500_.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/81BZPgWQ3JS._SL1500_.jpg" alt = "shoe image">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                    <img src = "https://m.media-amazon.com/images/I/81zMXqcnE3S._SL1500_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/81dbL4MEZGS._SL1500_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/91N1e0H6BUS._SL1500_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/81BZPgWQ3JS._SL1500_.jpg" alt = "shoe image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title"></h2>
          <h2 class = "product-title">Indianara 3 Pc Set of Still Art Paintings </h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
        </div>

        <div class = "product-price">
          <p class = "last-price">M.R.P.: <span>₹1399</span></p>
          <p class = "new-price">Price: <span>₹699(50%)</span></p>
        </div>
        <div class="product-detail">
          <hr>
          <h2>About this item</h2>
          <ul>
          <li>Dimensions (LXBXH) in cms of one large piece: 24*1*31 Dimensions (LXBXH) in cms of each small piece: 13*1*31</li>
          <li>Frame color Black and Frame Width 1.5 cm</li>
          <li>This product is without glass, lightweight and durable.</li>
          <li>The images represent actual product though color of the image and product may slightly differ.</li>
          <li>Please read the product dimensions carefully before placing an order.
        </li>
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