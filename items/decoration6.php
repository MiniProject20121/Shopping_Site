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
                <img src = "https://rukminim1.flixcart.com/image/416/416/j6l2hzk0/rack-shelf/t/a/q/dws101-decorasia-original-imaeww3myyb24z8m.jpeg?q=70" alt = "shoe image">
                <img src = "https://rukminim1.flixcart.com/image/416/416/j6l2hzk0/rack-shelf/t/a/q/dws101-decorasia-original-imaeww3mxgrf6zy5.jpeg?q=70" alt = "shoe image">
                <img src = "https://rukminim1.flixcart.com/image/416/416/jvfk58w0/rack-shelf/f/s/c/hexagon-designer-storage-shelf-set-of-6-orange-and-brown-original-imaeww3mahaq2xht.jpeg?q=70" alt = "shoe image">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                    <img src = "https://rukminim1.flixcart.com/image/416/416/j6l2hzk0/rack-shelf/t/a/q/dws101-decorasia-original-imaeww3myyb24z8m.jpeg?q=70" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://rukminim1.flixcart.com/image/416/416/j6l2hzk0/rack-shelf/t/a/q/dws101-decorasia-original-imaeww3mxgrf6zy5.jpeg?q=70" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://rukminim1.flixcart.com/image/416/416/jvfk58w0/rack-shelf/f/s/c/hexagon-designer-storage-shelf-set-of-6-orange-and-brown-original-imaeww3mahaq2xht.jpeg?q=70" alt = "shoe image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title"></h2>
          <h2 class = "product-title">DECORASIA Hexagon Shape Wooden Wall Shelf</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-al}
            #userInput {
                margin-left: 2rem;
                margin-right: 2rem;
                width: 40%;
                margin-top: 60px;
            }
            #textInput {
                margin-left: 2px;
                margin-right: 2px;
                width: 40%;
                margin-top: 80px;
            }t"></i>
            <span>4.7(21)</span>
        </div>

        <div class = "product-price">
          <p class = "last-price">M.R.P.: <span>₹2000</span></p>
          <p class = "new-price">Price: <span>₹1000(50%)</span></p>
        </div>
        <div class="product-detail">
          <hr>
          <h2>About this item</h2>
          <ul>
          <li>Suitable For: Living Room & Bedroom</li>
          <li>Material: Wooden</li>
          <li>No of Shelves: 6</li>
          <li>Rust Proof</li>
          <li>Width x Height: 10 inch x 3.5 inch</li>
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