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

    h2{
      display: block;
      width: 100%;
      text-align: center;
    }

    .content{
      display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: cente
    }

    .content > *{
      margin: 20px;
    }

    .content p{
      text-align: center;

    }

  </style>
</head>

<body>
<!--- HEADER-->
<?php require_once "components/header.php";?>

<!-- Content -->

<div class="main">
  <h2>About Us:-</h2>
</div>


<div class="feature" style="
    flex-direction: column;
">
<h2> What makes us different?</h2> <br>

       <div class="content">

        <div class="">
          <h2>What we do?</h2>
          <p>We deal in all kinds of PC Builds for many different use case like Gaming, Office , Production , Study.</p>
        </div>

        <div class="">
          <h2>Our Vision</h2>
          <p>We are dedicated to our customers and we know a PC Build is more like an investment, so we aim to provide what they should get acc. to their needs.</p>
        </div>

        <div class="">
          <h2>Our Mission</h2>

          <p>Here at QuickShop PCWALE our mission and vision is to provide the best value for money to our customers.</p>
  
        </div>
       </div>
</div>
    



<!-- Footer -->
<?php require_once "components/footer.php";?>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>