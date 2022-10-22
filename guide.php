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
<!-- Header -->
<?php require_once "components/header.php";?>
<!-- Content -->

<div class="main">
  <h2>Guide for pc selection:-</h2>
</div>


<div class="feature">
  <img src="./assets/images/banner-3.jpg" alt="" srcset="">
  <div>
    <p> Computers are an essential element in modern lives as everything around us depends highly on them. From the prominent business owners and entrepreneurs to the working professionals, students, and adults, everyone uses computers for various purposes.</p>
    <p>So now please look forward to best suitable pc you which you need according to your work.</p>   
  </div>
</div>

<div class="main">
  <h3>Office/Students:-</h3>
</div>

<div class="feature">
  <img src="./assets/images/banner-2.jpg" alt="" srcset="">
  <div>
    <p>The basic requirement of this type of work is often asked. The best suitable pc will be using Intel i5 processor with the ram of 8 gb/16 gb.</p>
    <p>As their is no need of any graphics related work, their is no such need of the graphics card . Using any type of mouse and keyboard will work properly without any problem.</p>
    <p>Students can easily work without any issue. Usually Students also play games so accordingly 4 or 6 gb graphics card can be used .</p>
    <p>Storaging data can be done in ssd and hard disk of minimum 1TB.</p>
   
    <!-- <a href="#" class="category-btn">Here are your list of prebuilded office or student pc.</a> -->
    <button class="btnShowAll">
      <a href="category.php?category=Office">Show All Office / Student PC</a>
    </button>
  </div>
</div>

<div class="main">
  <h3>Gaming/Production:-</h3>
</div>

<div class="feature">
  <img src="./assets/images/banner-1.jpg" alt="" srcset="">
  <div>
    <p>This pc are generally high end which include all the component up todate. The best suitable pc will be using Intel i9 or AMD Ryzen 9 processors .</p>
    <p>Graphics card id mostly important use here.So its suggested to use 8 or 12 gb graphics card. Using high end mouse and keyboard is nessary. </p>
    <p>Thw use of minimum 32 gb of ram is necessary and that can be in dual ram configuration for faster processing.</p>
    <p>Storing data must be done in nvme ssd which is faster to operate and can manage all type of data with less period of time.</p>  
    <button class="btnShowAll">
      <a href="category.php?category=Gaming">Show All Gaming / Production PC</a>
    </button>
    <a href="prebuildedgaming.php" class="category-btn"></a>
  </div>
</div>
<!-- Footer -->
<?php require_once "components/footer.php";?>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>