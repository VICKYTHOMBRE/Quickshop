<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="payment.css">

</head>
<body>

<div class="row">
  <div class="col-50">
    <div class="container">
      <form action="paymentMethod.html">
      
        <div class="row">
          <div class="col-50">
            <h3>Shipping Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="abc@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="">
              </div>
              <div class="col-50">
                <label for="zip">Pin</label>
                <input type="text" id="zip" name="zip" placeholder="">
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-50">
    <div class="container product">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <h4 class="heading"><span class="spanName">Name</span>
        <span>
        <span>Price x Quantity</span>
        </span>
     </h4>
      <?php
        @include '../config.php';
        $userId = explode(";",$_COOKIE["user"])[0];
        echo sprintf("<script>const userId=%d</script>",$userId);
        // $select = mysqli_query($conn, 'SELECT * FROM cart WHERE userId=3');
        $select = mysqli_query($conn, "SELECT * FROM cart where userId=".$userId);
        $totalPrice = 0;
        if(mysqli_num_rows($select) > 0){
          while($row = mysqli_fetch_assoc($select)) {
            $html = '
              <p><a href="#" class="spanName">%s</a> 
                <span><span class="price">₹%d</span><span> x %d</span></span>
              </p>
            ';
            echo sprintf($html,$row["name"],$row["price"],$row["quantity"]);
            $price = $row["price"]*$row["quantity"];
            $totalPrice = $price + $totalPrice;
          }
        }
        echo sprintf('<p>Total <span class="price" style="color:black"><b>₹%d</b></span></p>',$totalPrice);
 	    ?>
      <!-- <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p> -->
      <hr>
    </div>
  </div>
</div>

</body>
</html>