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
        margin: 20px;
        font-size: 40px;
    }
    .main,.feature{
      margin: 10px;
    
    }
    h5{
      color: white;
      margin: 20px;
      font-size: 24px;
      font-weight: 400;

    }

    .main h2{
      margin-top: 50px;
      text-align: center;
    }


    .main,.feature p{
      color:var(--davys-gray)
    }
    .main,.feature h2, h3 {
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
  <h2>Terms And Conditions:-</h2>
</div>


<div class="feature" style="
    flex-direction: column;"> 
    <h5>PLEASE READ THIS DOCUMENT CAREFULLY. IT CONTAINS VERY IMPORTANT INFORMATION ABOUT THE TERMS AND CONDITIONS GOVERNING YOUR USE OF THE SITE. PLEASE DO NOT USE THE SITE OR TRANSACT ON THE SITE IF YOU DO NOT AGREE WITH ANY OF THE TERMS AND CONDITIONS PROVIDED BELOW.</h5>
    
    <h4>Out of Stock:</h4>
     
    <p>If product is not in stock, Quickshop PCWale has every right to cancel the order without intimation to customer, email should be sent for cancelled order. In the event of Out Of Stock, full amount will be refunded to customer.<br>
    
    Transaction Charges are to be bared 50% by customer and 50% by QuickShop PCWALE.</p>
    
    <h4>Product Information images and Specification:</h4>
   <p> All specifications of products and its images mentioned on our website is just to identify the product, it may be vary time to time by its manufacturer, in that case our company is not liable for any errors or any technical thing which does not match with the product received by customer. Please refer to manufacturer website for the actual details like product images and specifications.</p>
    
     
    
    <h4>Colors:</h4>
     
    <p>We have made every effort to display the colors of our products that appear on the Site as accurately as possible. However, as the actual colors you see will depend on your monitor, we cannot guarantee that your monitor’s display of any color will be accurate.
        You may not use the Site for any of the following purposes:
        Disseminating any unlawful, harassing, libelous, abusive, threatening, harmful, vulgar, obscene, or otherwise objectionable material.
        Transmitting material that encourages conduct that constitutes a criminal offence, results in civil liability or otherwise breaches any relevant laws, regulations or code of practice.
        Gaining unauthorized access to other computer systems.
        Interfering with any other person’s use or enjoyment of the Site.
        Breaching any applicable laws;
        Interfering or disrupting networks or web sites connected to the Site.
        Making, transmitting or storing electronic copies of materials protected by copyright without the permission of the owner.</p>
         
   <h4>Modification of Terms and conditions of Service:</h4>
     
   <p> QuickShop PCWALE may at any time modify the User Agreement without any prior notification to you. Subsequent to any modification of the User Agreement. You can access the latest version of the User Agreement at any given time on www.quickshop.com. You should regularly review the User Agreement on www.quickshop.com. In the event the modified User Agreement is not acceptable to you, you should discontinue using the service. However, if you continue to use the service you shall be deemed to have agreed to accept and abide by the modified User Agreement.</p>
     
    <h4>Warranty Policy:</h4>
     
    <p>QuickShop PCWALE is a distributor only. Products sold at www.quickshop.com are not manufactured by QuickShop PCWALE. Where the words “Direct Warranty” or “Manufacturer Warranty” are mentioned it means the products may, however, is covered by each manufacturer’s warranty, service, and support policy (if present).
    The quality and performance of the product is dependent on the manufacturer.</p>
     
    <h4>Cancellation Policy :</h4>
     
    <p>If the customer requests to cancel the order before we have started to process the order (Usually within 24 Hours) then 10% of total amount will be charged as cancellation charges.
    If the customer requests to cancel the order after we have started processing the order (Usually after 24 Hours) then 25% of total amount will be charged as cancellation charges.
    If your product has been dispatched or delivered then the customer cannot cancel the order or return the product.</p>
    <h4>Refund Policy :</h4>
     
    <p>The refund process can take upto 7 days.</p>
    </div>
    
</div>


<!-- Footer -->
<?php require_once "components/footer.php";?>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>