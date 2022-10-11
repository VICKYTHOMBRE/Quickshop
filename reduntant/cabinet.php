<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quick Shop - eCommerce Website</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/logo.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="assets/css/CategoryPage.css">

</head>

<!--- HEADER-->
<?php require_once "components/header.php";?>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="https://www.facebook.com/vivek.thombre.399/" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://twitter.com/vivek_thombre" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/vivek__42_/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.linkedin.com/in/vivek-thombre-662124226/" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            <b>Free Shipping</b>
          
          </p>
        </div>

        <div class="header-top-actions">

        

          <select name="language">

            <option value="en-US">English</option>

          </select>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="./assets/images/logo/pcwale icon.png" alt="pc wale" width="120" height="36">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            <a href="login.php"><ion-icon id="icon"  name="person-outline"></ion-icon></a>
            
          </button>

        

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="index.php" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">ACCESSORIES</a>

            <ul style="margin-left: 138px;" class="dropdown-list">

              <li class="dropdown-item">
                <a href="powersupply.php">POWER SUPPLY</a>
              </li>

              <li class="dropdown-item">
                <a href="cabinet.php">CABINET</a>
              </li>

              <li class="dropdown-item">
                <a href="headphones.php">HEADPHONE</a>
              </li>

              <li class="dropdown-item">
                <a href="keyboard.php">KEYBOARD</a>
              </li>

              <li class="dropdown-item">
                <a href="mouse.php">MOUSE</a>
              </li>

            </ul>
          </li>
          <li class="menu-category">
            <a href="motherboard.php" class="menu-title">MOTHERBOARD</a>

          
          </li>

          <li class="menu-category">
            <a href="processor.php" class="menu-title">PROCESSOR</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">AMD</a>
              </li>

              <li class="dropdown-item">
                <a href="#">INTEL</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="motherboard.php" class="menu-title">GRAPHICS CARD</a>
          </li>

          <li class="menu-category">
            <a href="Ram.php" class="menu-title">RAM</a>

           
          </li>

          <li class="menu-category">
            <a href="prebuilded pc.php" class="menu-title">PREBUILDED PC</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="prebuildegamingpc.php">GAMING/PRODUCTION</a>
              </li>

              <li class="dropdown-item">
                <a href="prebuildedoffice.php">OFFICE/STUDENT</a>
              </li>


            </ul>
          </li>

          <li class="menu-category">
            <a href="guide.php" class="menu-title">GUIDE</a>
          </li>

          

        </ul>

      </div>

    </nav>


  </header>

  <div class="product-minimal">
    <div class="product-showcase">
            
      <h2 class="title">CABINET</h2>
    
      <div class="showcase-wrapper  has-scrollbar">
        <div class="showcase-container"></div>
    
      </div>
    
    </div>
  
  </div>

<!-- Footer -->
<?php require_once "components/footer.php";?>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
      const items = [
          {
              imgUrl: "assets/images/products/ram",
              title: "title",
              category: "category",
              price: "price"
          },
              {
              imgUrl: "",
              title: "op",
              category: "category",
              price: "price"
          },
              {
              imgUrl: "",
              title: "title",
              category: "category",
              price: "price"
          },
              {
              imgUrl: "",
              title: "title",
              category: "category",
              price: "price"
          },
      ]

      items.forEach(item => {
          const wrapper = document.querySelector(".showcase-container");
          let showcase = document.createElement("div")
          showcase.classList.add("showcase");
          
          let a = document.createElement("a");
          a.classList.add("showcase-img-box");
          
          img = document.createElement("img");
          img.classList.add("showcase-img");
          img.setAttribute("width",70);
          img.setAttribute("src",item.imgUrl);
          a.appendChild(img);
          showcase.appendChild(a);
          
          let showcaseContent = document.createElement("div");
          showcaseContent.classList.add("showcase-content");
          a = document.createElement("a");
          let h4 = document.createElement("h4");
          h4.innerHTML = item.title;
          h4.classList.add("showcase-title");
          a.appendChild(h4);
          showcaseContent.appendChild(a);
          
          a = document.createElement("a");
          a.classList.add("showcase-category");
          a.innerHTML = item.category;
          showcaseContent.appendChild(a);
          
          div = document.createElement("div");
          div.classList.add("price-box");
          let p = document.createElement("p");
          p.classList.add("price");
          p.innerHTML = item.price;
          div.appendChild(p);
          
          let priceBox = document.createElement("div");
          priceBox.classList.add("price-box");
          p = document.createElement("p");
          p.classList.add("price");
          p.innerHTML = item.price;
          priceBox.appendChild(p);
          showcaseContent.appendChild(priceBox);
          
          showcase.appendChild(showcaseContent);
          wrapper.appendChild(showcase);


      });
  </script>
</body>