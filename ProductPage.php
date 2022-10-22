<?php
    @include 'config.php';
    $id = $_GET["id"];
    echo $id;
    setlocale(LC_MONETARY, 'en_IN');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X_UA_Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.">
        <title>Product Page</title>
        <link rel="stylesheet" href="./assets/css/ProductPage.css">
    </head>
    <body>
    <?php
        

        $select = mysqli_query($conn, "SELECT * FROM products where id='".$id."'");
        $rows = mysqli_num_rows($select);
        $row = array();
        echo "Rows ".$rows;
        if($rows == 1){
            $row = mysqli_fetch_assoc($select);
        }
      ?>
    <div class="container">
            <div class="wrapper" id="<?php echo $row["Id"] ?>">
                    <div class="product-box">
                        <div class="all-images">
                                <div class="small-images">
                                    <img id="image1" src="<?php echo 'http://localhost/quickshop/uploaded_img/'.$row["image"] ?>" onclick="clickimg(this)">
                                    <img src="<?php echo 'http://localhost/quickshop/uploaded_img/'.$row["image2"] ?>" onclick="clickimg(this)">
                                    <img src="<?php echo 'http://localhost/quickshop/uploaded_img/'.$row["image3"] ?>" onclick="clickimg(this)">
                                </div>
                        <div class="main-images">
                            <img src="<?php echo 'http://localhost/quickshop/uploaded_img/'.$row["image"] ?>"  id="imagebox">
                        </div>
                        </div>
                    </div>
                    <div class="text">
                            <div class="content">
                                <p class="brand">Brand:APPLE</p>
                                <h2 id="name"><?php echo $row["name"] ?></h2>
                                <div class="review">
                                    <span>4.7 </span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="price-box">
                                    <p price='<?php echo $row["price"] ?>' id="price" class="price">&#8377; <?php echo $row["price"] ?></p>
                                </div>
                                <p>QUANTITY
                                    <select id="quantity" name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select> 
                                </p>
                                <button id="addToCart">
                                    <span class="fa fa-shopping-cart"></span>
                                        ADD TO CART
                                </button>
                                <!-- <button class="buy" >
                                    <span class="fa fa-shopping-cart"></span>
                                    BUY NOW
                                </button> -->
                                <h4 id="descriptions">Description</h4>
                                <p id="desc">
                                <?php echo $row["description"] ?>
                                </p>

                              
                             </div>
                    </div>
            </div>
        </div>
    </body>
    <script>
        const btnCart = document.querySelector("#addToCart");
        btnCart.addEventListener("click",e => {
            e.preventDefault();
            const productId = document.querySelector(".wrapper").id;
            const image = document.querySelector("#image1").src
            const price = parseInt(document.querySelector("#price").getAttribute("price"));
            const prodName = document.querySelector("#name").innerText;
            const quantity = document.querySelector("#quantity").value;
            const data = new FormData();
            let cookie = decodeURIComponent(document.cookie).split("=")[1].split(";");
            const userId = cookie[0];
            const name = cookie[1];
            const email = cookie[2];
            const pass = cookie[3];

            data.append("type","addToCart");
            data.append("userId", userId);
            data.append("productId", productId);
            data.append("quantity", quantity);
            data.append("name",prodName);
            data.append("price",price);
            data.append("image",image);

            fetch("http://localhost/quickshop/cartHandler.php",{
                method: "POST",
                credentials: 'same-origin', 
                headers: {'X-Requested-With': 'XMLHttpRequest'},
                body: data
            }).then((err, data) => {
                location.href = "http://localhost/quickshop/cart.php";

            });
            

            // data.append("productId", produ)
        });
                function clickimg(smallImg){
                    var fullImg = document.getElementById("imagebox")
                    fullImg.src = smallImg.src
       
                } 
        </script>    
<html>