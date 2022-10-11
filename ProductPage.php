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
        <div class="container">
            <div class="wrapper">
                    <div class="product-box">
                        <div class="all-images">
                                <div class="small-images">
                                    <img src="images\Adata-XPG-Starker-Air-ARGB-ATX-Cabinet-White 1.webp" onclick="clickimg(this)">
                                    <img src="images\Adata-XPG-Starker-Air-ARGB-ATX-Cabinet-White-2.webp" onclick="clickimg(this)">
                                    <img src="images\Adata-XPG-Starker-Air-ARGB-ATX-Cabinet-White-3.webp" onclick="clickimg(this)">
                                </div>
                        <div class="main-images">
                            <img src="images\Adata-XPG-Starker-Air-ARGB-ATX-Cabinet-White-3.webp" id="imagebox">
                        </div>
                        </div>
                    </div>
                    <div class="text">
                            <div class="content">
                                <p class="brand">Brand:APPLE</p>
                                <h2>APPLE IPHONE 13 (WHITE,128)</h2>
                                <div class="review">
                                    <span>4.7 </span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="price-box">
                                    <p class="price">&#8377; 79,999</p>
                                    <strike>&#8377; 84,999 </strike>
                                </div>
                                <p>QUANTITY
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select> </p>
                                <button>
                                    <span class="fa fa-shopping-cart"></span>
                                        ADD TO CART
                                </button>
                                <button class="buy">
                                    <span class="fa fa-shopping-cart"></span>
                                    BUY NOW
                                </button>
                                <h4 id="descriptions">Description</h4>
                                <p id="desc">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere a in reprehenderit unde, voluptate dolorem hic eius optio autem cumque illo incidunt laudantium nulla quae placeat sequi facilis aliquid velit.
                                </p>

                              
                             </div>
                    </div>
            </div>
        </div>



        <script>
                function clicking(smallImg){
                    var fullImg = document.getElementById("imagebox")
                    fullImg.src = smallImg.src
       
                } 
        </script>    
    </body>
<html>