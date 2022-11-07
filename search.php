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

  <link rel="stylesheet" href="assets/css/CategoryPage.css">
  <style>
    .product-minimal .showcase-content{
      max-width: 80vw;
    }
    .showcase{
      cursor: pointer;
    }
  </style>
</head>

<body>
<!--- HEADER-->
<?php require_once "components/header.php";?>

  <div class="product-minimal">
    <div class="product-showcase">
            
      <h2 class="title">
        <?php
          $search = $_GET["search"];
          echo $search;
        ?>
      </h2>
      <div class="showcase-wrapper  has-scrollbar">
   <div class="showcase-container">
     <?php
        
        // echo "SELECT * FROM products where name like '%".$search."%'";
        $select = mysqli_query($conn, "SELECT * FROM products where name like '%".$search."%'");
        // print_r($select)["id"];
        if(mysqli_num_rows($select) > 0){
          while($row = mysqli_fetch_assoc($select)) {
            echo '<div class="showcase" id="'.$row["Id"].'">';
            echo '<a class="showcase-img-box">';
            echo '<img class="showcase-img" width="70" src="http://localhost/quickshop/uploaded_img/'.$row['image'].'">';
            echo '</a>';
            echo '<div class="showcase-content">';
            echo '<a>';
            echo '<h4 class="showcase-title">'.$row["name"].'</h4>';
            echo '</a>';
            echo '<a class="showcase-category">'.$row['category'].'</a>';
            echo '<div class="price-box">';
            echo '<p class="price">₹'.$row['price'].'/-</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
        }
      ?>
     
   </div>
 </div>

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
    const products = document.querySelectorAll(".showcase");
    console.log(products);
    products.forEach(product => {
      product.addEventListener("click", e => {
        window.open("http://localhost/quickshop/productpage.php?id=" + product.id);
      })
    })
  </script>

</body>