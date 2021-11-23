!DOCTYPE html>
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
                <img src = "https://m.media-amazon.com/images/I/61U257bmRHL._SL1001_.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/71ujRNEpjXL._SL1500_.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/71EJ3bQmoWL._SL1000_.jpg" alt = "shoe image">
                <img src = "https://m.media-amazon.com/images/I/51wvlofj7ML.jpg" alt = "shoe image">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                    <img src = "https://m.media-amazon.com/images/I/61U257bmRHL._SL1001_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/71ujRNEpjXL._SL1500_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/71EJ3bQmoWL._SL1000_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/51wvlofj7ML.jpg" alt = "shoe image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title"></h2>
          <h2 class = "product-title"> Dreamcatchers with Lights</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.7(21)</span>
        </div>

        <div class = "product-price">
          <p class = "last-price">M.R.P.: <span>₹1619</span></p>
          <p class = "new-price">Price: <span>₹499(62%)</span></p>
        </div>
        <div class="product-detail">
          <hr>
          <h2>About this item</h2>
          <ul>
          <li>This beautiful dream catcher can be combined with other dream catcher kit, starry lights combo or with tapastry's tent dome for instant mesmerising feel</li>
          <li>Looking for ideas to decorate your room or a perfect gift for your friends, baby girl, kid or girl?? Party Propz dream catcher is the perfect addition to it!! We have curated this design after a lot of research and the packaging make it look great as a gift
        </li>
          <li>â¤ Size Dia 7.8" rings Length 20", bigger than most of Dreamcatchers decor. Beige tassels design with flowers and feathers also suit for Boho wedding dÃcoration.Perfect wall art and indispensable decoration for home.</li>
          <li>Decorative your home, office, bedroom, living room, even use it as a wedding and party decoration. Hanging it near the window makes a good dream at night</li>
          <li>he packet includes 1Pc green beautiful bohemian design dream catcher with lights Kids, Teenagers, girls room, bedroom decorations. These dream catchers are low consumption,high safety and battery powered,you can use them almost anywhere. This dreaam cather is beautiful handmade by the craft experts and the materials used are very elegant. This dreamcatchers can be used for cute birthday return gifts to your little girl</li>
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