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
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/10679170/2019/12/12/ea169ee3-3b1d-43c7-be7e-f655e9d025f91576129957344-Roadster-Men-Navy-Blue--Black-Solid-Reversible-Bomber-Jacket-1.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/10679170/2019/12/12/061cc96d-ab93-41d4-b16f-d914e18a064c1576129957296-Roadster-Men-Navy-Blue--Black-Solid-Reversible-Bomber-Jacket-2.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/10679170/2019/12/12/cd0a594a-b76c-4067-a487-d15ccb20dc741576129957255-Roadster-Men-Navy-Blue--Black-Solid-Reversible-Bomber-Jacket-3.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/10679170/2019/12/12/63a65efb-f038-487e-ac4f-af5c1213281c1576129957202-Roadster-Men-Navy-Blue--Black-Solid-Reversible-Bomber-Jacket-4.jpg" alt = "cloth image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/10679170/2019/12/12/ea169ee3-3b1d-43c7-be7e-f655e9d025f91576129957344-Roadster-Men-Navy-Blue--Black-Solid-Reversible-Bomber-Jacket-1.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/10679170/2019/12/12/061cc96d-ab93-41d4-b16f-d914e18a064c1576129957296-Roadster-Men-Navy-Blue--Black-Solid-Reversible-Bomber-Jacket-2.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/10679170/2019/12/12/cd0a594a-b76c-4067-a487-d15ccb20dc741576129957255-Roadster-Men-Navy-Blue--Black-Solid-Reversible-Bomber-Jacket-3.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/10679170/2019/12/12/63a65efb-f038-487e-ac4f-af5c1213281c1576129957202-Roadster-Men-Navy-Blue--Black-Solid-Reversible-Bomber-Jacket-4.jpg" alt = "cloth image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">Roadster
          </h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.3(290)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹4399.00</span></p>
            <p class = "new-price">Price: <span>₹2639.00 (40%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this</h2>
            <ul>
            <li>Men Navy Blue & Black Solid Reversible Bomber Jacket</li>
            <li>Navy Blue and black solid reversible jacket.
              Black solid reversible jacket, has a mock collar, 5 pockets, zip closure, long sleeves, straight hem, and cotton lining
              Navy Blue solid reversible jacket, has a mock collar, 5 pockets, zip closure, long sleeves, straight hem, and cotton lining</li>
            <li>Size & Fit: Slim fit The model (height 6') is wearing a size M</li>
            <li>
              Material & Care: Shell:100% Cotton 
              Lining:100% Cotton
              Machine Wash</li>
            </ul>
            </div>
          <div class = "purchase-info">

          <p class = "size-info">Size: <select name="size" class="size-select" >

              <option value="select size" id="hello1">Select Size</option>
              <option value="small" >Small (S)</option>
              <option value="medium" >Medium (M)</option>
              <option value="large" >Large (L)</option>
              <option value="Extra large" >Extra Large (XL)</option>

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
