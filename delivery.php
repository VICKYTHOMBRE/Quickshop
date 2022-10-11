<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quick Shop-GUIDE</title>

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

    h4{
        color: var(--salmon-pink);
    }
    .main,.feature{
      margin: 10px;
    }
    .main,.feature p{
      color:var(--davys-gray)
    }
    .main,.feature h2, h3{
      /* color: var(--eerie-black); */
      color: var(--salmon-pink);
    }

    .feature{
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: flex-start;
      margin:30px 90px;
      font-size: 14px;
    }

    .feature > *{
      margin-left: 10px;
    }

    .feature p{
      margin-bottom: 10px;
      text-align: justify;
    }

    .feature img{
      width: 400px;

      /* width: 100%; */
    }

    .btnShowAll{
      
      border:2px solid var(--salmon-pink);
      color: var(--salmon-pink);
      /* background-color: var(--salmon-pink); */
      padding: 10px;
      border-radius: 12px;
    }

    .btnShowAll:hover{
      background-color: var(--salmon-pink);
      transition: 500ms background-color;
    }

    .btnShowAll a{
      color: var(--salmon-pink);
    }

    .btnShowAll a:hover{
      color: #191919;;
      transition: 500ms color;

    }


  </style>
</head>

<body>
<!--- HEADER-->
<?php require_once "components/header.php";?>

<!-- Content -->

<div class="main">
  <h2>DELIVERY:-</h2>
</div>


<div class="feature">
  <div>

    <h4> What are the delivery charges? </h4>
    <p>Delivery charge varies with each Seller.</p>
    <p>Sellers incur relatively higher shipping costs on low value items. In such cases, charging a nominal delivery charge helps them offset logistics costs. Please check your order summary to understand the delivery charges for individual products.</p>
       <h4> Why does the delivery date not correspond to the delivery timeline of X-Y business days?    </h4>
    <p>It is possible that the Seller or our courier partners have a holiday between the day your placed your order and the date of delivery, which is based on the timelines shown on the product page. In this case, we add a day to the estimated date. Some courier partners and Sellers do not work on Sundays and this is factored in to the delivery dates.</p>
       <h4> What is the estimated delivery time?    </h4>
    <p>Sellers generally procure and ship the items within the time specified on the product page. Business days exclude public holidays and Sundays.</p>
    <p>Estimated delivery time depends on the following factors:</p>
       <h4> Are there any hidden costs (sales tax, octroi etc) on items sold by Sellers on Quickshop?    </h4>
    <p>There are NO hidden charges when you make a purchase on Quickshop. List prices are final and all-inclusive. The price you see on the product page is exactly what you would pay.</p>
    <p>Delivery charges are not hidden charges and are charged (if at all) extra depending on the Seller's shipping policy.</p>
       <h4> Why does the estimated delivery time vary for each seller?    </h4>
    <p>You have probably noticed varying estimated delivery times for sellers of the product you are interested in. Delivery times are influenced by product availability, geographic location of the Seller, your shipping destination and the courier partner's time-to-deliver in your location.</p>
    <p>Please enter your default pin code on the product page (you don't have to enter it every single time) to know more accurate delivery times on the product page itself.</p>
       <h4> Seller does not/cannot ship to my area. Why?    </h4>
    <p>Please enter your pincode on the product page (you don't have to enter it every single time) to know whether the product can be delivered to your location.</p>
    <p>If you haven't provided your pincode until the checkout stage, the pincode in your shipping address will be used to check for serviceability.</p>
    <p>Whether your location can be serviced or not depends on</p>
    <p>At times Sellers prefer not to ship to certain locations. This is entirely at their discretion.</p>
       <h4> Why is the CoD option not offered in my location?    </h4>
    <p>Availability of CoD depends on the ability of our courier partner servicing your location to accept cash as payment at the time of delivery.</p>
    <p>Our courier partners have limits on the cash amount payable on delivery depending on the destination and your order value might have exceeded this limit. Please enter your pin code on the product page to check if CoD is available in your location.</p>
       <h4> I need to return an item, how do I arrange for a pick-up?    </h4>
    <p>Returns are easy. Contact Us to initiate a return. You will receive a call explaining the process, once you have initiated a return.</p>
    <p>Wherever possible Ekart Logistics will facilitate the pick-up of the item. In case, the pick-up cannot be arranged through Ekart, you can return the item through a third-party courier service. Return fees are borne by the Seller.</p>
       <h4> What do the different tags like "In Stock", "Available" mean?    </h4>
       <h4> 'In Stock'    </h4>
    <p>FFor items listed as "In Stock", Sellers will mention the delivery time based on your location pincode (usually 2-3 business days, 4-5 business days or 4-6 business days in areas where standard courier service is available). For other areas, orders will be sent by Registered Post through the Indian Postal Service which may take 1-2 weeks depending on the location.</p>
       <h4> 'Available'    </h4>
    <p>The Seller might not have the item in stock but can procure it when an order is placed for the item. The delivery time will depend on the estimated procurement time and the estimated shipping time to your location.</p>
       <h4> 'Preorder' or 'Forthcoming'    </h4>
    <p>Such items are expected to be released soon and can be pre-booked for you. The item will be shipped to you on the day of it's official release launch and will reach you in 2 to 6 business days. The Preorder duration varies from item to item. Once known, release time and date is mentioned. (Eg. 5th May, August 3rd week)</p>
       <h4> 'Out of Stock'    </h4>
    <p>Currently, the item is not available for sale. Use the 'Notify Me' feature to know once it is available for purchase.</p>
       <h4> 'Imported'    </h4>
    <p>Sometimes, items have to be sourced by Sellers from outside India. These items are mentioned as 'Imported' on the product page and can take at least 10 days or more to be delivered to you.</p>
    <p> 'Back In Stock Soon' </p>
    <p>The item is popular and is sold out. You can however 'book' an order for the product and it will be shipped according to the timelines mentioned by the Seller.</p>
       <h4> 'Temporarily Unavailable'    </h4>
    <p>The product is currently out of stock and is not available for purchase. The product could to be in stock soon. Use the 'Notify Me' feature to know when it is available for purchase.</p>
       <h4> 'Permanently Discontinued'    </h4>
    <p>This product is no longer available because it is obsolete and/or its production has been discontinued.</p>
       <h4> 'Out of Print'    </h4>
    <p>This product is not available because it is no longer being published and has been permanently discontinued.</p>
    <h2 id="-does-Quickshop-deliver-internationally-"> Does Quickshop deliver internationally? </h2>
    <p>As of now, Quickshop doesn't deliver items internationally.</p>
    <p>You will be able to make your purchases on our site from anywhere in the world with credit/debit cards issued in India and 21 other countries, but please ensure the delivery address is in India.</p>
    
  </div>
</div>


<!-- Footer -->
<?php require_once "components/footer.php";?>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>