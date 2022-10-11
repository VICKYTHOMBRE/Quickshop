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

<body>
<!--- HEADER-->
<?php require_once "components/header.php";?>

  <div class="product-minimal">
    <div class="product-showcase">
            
      <h2 class="title">PREBUILDED GAMING/PRODUCTION PC</h2>
    
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