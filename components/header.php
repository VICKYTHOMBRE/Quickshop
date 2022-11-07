<header>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<style>
  #user{
    font-size: 20px;
  }
  .user{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }
</style>
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

    <a href="index.php" class="header-logo">
      <img src="./assets/images/logo/pcwale icon.png" alt="pc wale" width="120" height="36">
    </a>

    <div class="header-search-container">

      <input type="search" name="search" id="searchBar" class="search-field" placeholder="Enter your product name...">

      <button id="btnSearch" class="search-btn">
        <ion-icon name="search-outline"></ion-icon>
      </button>
      <script>
        const searchBar = document.querySelector("#searchBar");
        const btnSearch = document.querySelector("#btnSearch");
        btnSearch.addEventListener("click", e => {
          // alert(searchBar.value);
          location.href = "search.php?search="+searchBar.value
        })
      </script>
    </div>

    <div class="header-user-actions">

      <button class="action-btn user">
        <?php
          if(isset($_COOKIE["user"])){
            echo "<span id='user'>".explode(";",urldecode($_COOKIE["user"]))[1]."</span>";

              echo '<i id="logout" class="bi bi-box-arrow-right"></i>';
          }else{
            echo '<a href="login.php" class="menu-title">Login</a>
            <ul style="margin-left: 138px;" class="">
          </ul>
            ';
          }
        ?>

        
      </button>

    

      <button class="action-btn">
        <a href="http://localhost/quickshop/cart.php"><ion-icon name="bag-handle-outline"></ion-icon></a>
        <!-- <span class="count">0</span> -->
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
            <a href="category.php?category=powersupply">POWER SUPPLY</a>
          </li>

          <li class="dropdown-item">
            <a href="category.php?category=cabinet">CABINET</a>
          </li>

          <li class="dropdown-item">
            <a href="category.php?category=headphones">HEADPHONE</a>
          </li>

          <li class="dropdown-item">
            <a href="category.php?category=keyboard">KEYBOARD</a>
          </li>

          <li class="dropdown-item">
            <a href="category.php?category=mouse">MOUSE</a>
          </li>

        </ul>
      </li>
      <li class="menu-category">
        <a href="category.php?category=motherboard" class="menu-title">MOTHERBOARD</a>

      
      </li>

      <li class="menu-category">
        <a href="category.php?category=processor" class="menu-title">PROCESSOR</a>
      </li>

      <li class="menu-category">
        <a href="category.php?category=graphicsCard" class="menu-title">GRAPHICS CARD</a>
      </li>

      <li class="menu-category">
        <a href="category.php?category=ram" class="menu-title">RAM</a>

       
      </li>

      <li class="menu-category">
        <a class="menu-title">PREBUILDED PC</a>

        <ul class="dropdown-list">

          <li class="dropdown-item">
            <a href="category.php?category=Gaming">GAMING/PRODUCTION</a>
          </li>

          <li class="dropdown-item">
            <a href="category.php?category=Office">OFFICE/STUDENT</a>
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

<script>
  const logout = document.querySelector("#logout");
  logout.addEventListener("click", e => {
    e.preventDefault();
    document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
    alert("Logged Out");
    location.reload();
    console.log(logout);
  })
</script>
