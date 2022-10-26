<!DOCTYPE html>
<html lang="en">
<?php
@include 'config.php';
?>

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

  <style>
    #icon {
      color: var(--onyx);
    }

    .product-minimal .showcase-container {
      max-height: 244px;
      overflow: auto;
    }

    *::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      background-color: #191919;
    }

    *::-webkit-scrollbar {
      width: 6px;
      height: 6px;
      background-color: #F5F5F5;
    }

    *::-webkit-scrollbar-thumb {
      background-color: #cccccc;
      border-radius: 20px;
    }
    .showcase{
      cursor: pointer;
    }
  </style>
</head>

<body>


  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->
  <!-- 
  <div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="./assets/images/NOTIFICATION1.jpg" alt="" width="500" height="500">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe Newsletter.</h3>

            <p class="newsletter-desc">
              Subscribe the <b>PC WALE</b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div> -->





  <!--
    - NOTIFICATION TOAST
  -->

  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/products/prebuildedpc/gamingpc.jpg" alt="Prebuilded gaming pc" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Someone in new just bought
      </p>

      <p class="toast-title">
        PREBUILDED GAMING PC
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>


  <!--- HEADER-->

  <?php require_once "components/header.php"; ?>






  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="./assets/images/banner-1.jpg" alt="prebuilded gaming pc" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending Item</p>

              <h2 class="banner-title">PREBUILDED GAMING PC</h2>

              <a href="category.php?category=Gaming" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/banner-2.jpg" alt="prebuilded office pc" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending accessories</p>

              <h2 class="banner-title">PREBUILDED OFFICE PC</h2>

              <a href="category.php?category=Office" class="banner-btn">Shop now</a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/motherboard.png" alt="motherboard" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">MOTHERBOARD</h3>

                <p class="category-item-amount">(5)</p>
              </div>

              <a href="category.php?category=motherboard" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/processor.png" alt="processor" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">PROCESSOR</h3>

                <p class="category-item-amount">(10)</p>
              </div>

              <a href="category.php?category=processor" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/ram.png" alt="ram" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">RAM</h3>

                <p class="category-item-amount">(5)</p>
              </div>

              <a href="category.php?category=ram" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/keyboard.png" alt="keyboard" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">KEYBOARD</h3>

                <p class="category-item-amount">(10)</p>
              </div>

              <a href="category.php?category=keyboard" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/mouse.png" alt="mouse" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">MOUSE</h3>

                <p class="category-item-amount">(5)</p>
              </div>

              <a href="category.php?category=mouse" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/graphics-card.png" alt="graphics card" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">GRAPHICS CARD</h3>

                <p class="category-item-amount">(5)</p>
              </div>

              <a href="category.php?category=graphicsCard" class="category-btn">Show all</a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->









        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">New Arrivals</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">
                  <?php
                    $select = mysqli_query($conn, "SELECT * FROM products where NewArival=1");
                    if (mysqli_num_rows($select) > 0) {
                      while ($row = mysqli_fetch_assoc($select)) {
                        echo '<div class="showcase" id="'.$row["Id"].'">';
                        echo '<a class="showcase-img-box">';
                        echo '<img class="showcase-img" width="70" src="http://localhost/quickshop/uploaded_img/' . $row['image'] . '">';
                        echo '</a>';
                        echo '<div class="showcase-content">';
                        echo '<a>';
                        echo '<h4 class="showcase-title">' . $row["name"] . '</h4>';
                        echo '</a>';
                        echo '<a class="showcase-category">' . $row['category'] . '</a>';
                        echo '<div class="price-box">';
                        echo '<p class="price">₹' . $row['price'] . '/-</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                      }
                    }
                  ?>

                </div>

                <!-- <div class="showcase-container">
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/powersupply/ps2.jpg" alt="COOLER MASTER 550 WATT POWER SUPPLY" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">COOLER MASTER 550 WATT POWER SUPPLY</h4>
                      </a>
                
                      <a href="#" class="showcase-category">POWERSUPPLY</a>
                
                      <div class="price-box">
                        <p class="price">RS 3899</p>
                        <del>RS 4500</del>
                      </div>
                
                    </div>
                
                  </div>
                
                
            
                
                 
                
                </div> -->

              </div>

            </div>

            <div class="product-showcase">

              <h2 class="title">Trending</h2>
              <div class="showcase-container">
                  <?php
                    $select = mysqli_query($conn, "SELECT * FROM products where Trending=1");
                    if (mysqli_num_rows($select) > 0) {
                      while ($row = mysqli_fetch_assoc($select)) {
                        echo '<div class="showcase" id="'.$row["Id"].'">';
                        echo '<a class="showcase-img-box">';
                        echo '<img class="showcase-img" width="70" src="http://localhost/quickshop/uploaded_img/' . $row['image'] . '">';
                        echo '</a>';
                        echo '<div class="showcase-content">';
                        echo '<a>';
                        echo '<h4 class="showcase-title">' . $row["name"] . '</h4>';
                        echo '</a>';
                        echo '<a class="showcase-category">' . $row['category'] . '</a>';
                        echo '<div class="price-box">';
                        echo '<p class="price">₹' . $row['price'] . '/-</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                      }
                    }
                  ?>

                </div>

            </div>

            <div class="product-showcase">

              <h2 class="title">Top Rated</h2>
              <div class="showcase-container">
                  <?php
                    $select = mysqli_query($conn, "SELECT * FROM products where TopRated=1");
                    if (mysqli_num_rows($select) > 0) {
                      while ($row = mysqli_fetch_assoc($select)) {
                        echo '<div class="showcase" id="'.$row["Id"].'">';
                        echo '<a class="showcase-img-box">';
                        echo '<img class="showcase-img" width="70" src="http://localhost/quickshop/uploaded_img/' . $row['image'] . '">';
                        echo '</a>';
                        echo '<div class="showcase-content">';
                        echo '<a>';
                        echo '<h4 class="showcase-title">' . $row["name"] . '</h4>';
                        echo '</a>';
                        echo '<a class="showcase-category">' . $row['category'] . '</a>';
                        echo '<div class="price-box">';
                        echo '<p class="price">₹' . $row['price'] . '/-</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                      }
                    }
                  ?>

                </div>

            </div>

          </div>








          <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

          <div>

            <div class="container">

              <div class="testimonials-box">

                <!--
            - TESTIMONIALS
          -->

                <div class="testimonial">

                  <h2 class="title">testimonial</h2>

                  <div class="testimonial-card">

                    <img src="./assets/images/profilepic.jpg" alt="vivek thombre" class="testimonial-banner" width="80"
                      height="80">

                    <p class="testimonial-name">Vivek Thombre</p>

                    <p class="testimonial-title">CEO OF QUICKSHOP </p>

                    <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

                    <p class="testimonial-desc">
                      Buy now or cry later.
                    </p>

                  </div>

                </div>



                <!--
            - CTA
          -->

                <div class="cta-container">

                  <img src="./assets/images/GAMINGKEYBOARD.jpg" alt="keyboard" class="cta-banner">

                  <a href="/quickshop/category.php?category=keyboard" class="cta-content">

                    <p class="discount">25% Discount</p>

                    <h2 class="cta-title">GAMING KEYBOARDS</h2>

                    <button class="cta-btn">Shop now</button>

                  </a>

                </div>



                <!--
            - SERVICE
          -->

                <div class="service">

                  <h2 class="title">Our Services</h2>

                  <div class="service-container">

                    <a href="#" class="service-item">

                      <div class="service-icon">
                        <ion-icon name="boat-outline"></ion-icon>
                      </div>

                      <div class="service-content">

                        <h3 class="service-title">Worldwide Delivery</h3>


                      </div>

                    </a>

                    <a href="#" class="service-item">

                      <div class="service-icon">
                        <ion-icon name="rocket-outline"></ion-icon>
                      </div>

                      <div class="service-content">

                        <h3 class="service-title">Next Day delivery</h3>


                      </div>

                    </a>

                    <a href="#" class="service-item">

                      <div class="service-icon">
                        <ion-icon name="call-outline"></ion-icon>
                      </div>

                      <div class="service-content">

                        <h3 class="service-title">Best Online Support</h3>


                      </div>

                    </a>

                    <a href="#" class="service-item">

                      <div class="service-icon">
                        <ion-icon name="arrow-undo-outline"></ion-icon>
                      </div>

                      <div class="service-content">

                        <h3 class="service-title">Easy & Free Return</h3>


                      </div>

                    </a>

                    <a href="#" class="service-item">

                      <div class="service-icon">
                        <ion-icon name="ticket-outline"></ion-icon>
                      </div>

                      <div class="service-content">

                        <h3 class="service-title">Chances of cashback</h3>


                      </div>

                    </a>

                  </div>

                </div>

              </div>

            </div>

          </div>




  </main>






  <!-- Footer -->
  <?php require_once "components/footer.php"; ?>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    const products = document.querySelectorAll(".showcase");
    console.log(products);
    products.forEach(product => {
      product.addEventListener("click", e => {
        window.open("http://localhost/quickshop/productpage.php?id=" + product.id);
      })
    })
  </script>
</body>

</html>