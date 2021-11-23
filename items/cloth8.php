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
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15154140/2021/8/16/be7129cb-640e-40ef-bdf0-a3aa6e46d1291629111284191BitiyabyBhama1.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15154140/2021/8/16/d4db17a8-8469-43e9-aaa7-f00f1f1242b91629111284398BitiyabyBhama2.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15154140/2021/8/16/57cfec01-84c0-4804-a053-fc352d0c8e631629111284637BitiyabyBhama5.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15154140/2021/8/16/bed5f82b-f3a9-4228-9dc5-46db6dbabb921629111284460BitiyabyBhama3.jpg" alt = "cloth image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15154140/2021/8/16/be7129cb-640e-40ef-bdf0-a3aa6e46d1291629111284191BitiyabyBhama1.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15154140/2021/8/16/d4db17a8-8469-43e9-aaa7-f00f1f1242b91629111284398BitiyabyBhama2.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15154140/2021/8/16/57cfec01-84c0-4804-a053-fc352d0c8e631629111284637BitiyabyBhama5.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15154140/2021/8/16/bed5f82b-f3a9-4228-9dc5-46db6dbabb921629111284460BitiyabyBhama3.jpg" alt = "cloth image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">Bitiya by Bhama
          </h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>3.8(30)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹3199.00</span></p>
            <p class = "new-price">Price: <span>₹1500.00 (50%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this</h2>
            <ul>
            <li>Girls Off White & Pink Ready to Wear Lehenga Choli</li>
            <li>Off white and pink solid lehenga choli
              Off white ready to wear blouse, has a shirt collar, three-quarter sleeves, button closure
              Pink printed ready to wear lehenga, has slip-on closure, flared hem</li>
            <li>Material & Care: 
              Blouse fabric: Cotton
              Lehenga fabric: Silk</li>
            </ul>
            </div>
          <div class = "purchase-info">

          <p class = "size-info">Size: <select name="size" class="size-select" >

              <option value="select size" id="hello1">Select Size</option>
              <option value="small" >09-10 Year</option>
              <option value="medium" >10-11 Year</option>
              <option value="large" >11-12 Year</option>
              <option value="Extra large" >12-14 Year</option>

          </select></p>
          

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
