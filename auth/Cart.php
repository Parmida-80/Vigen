<?php
require_once '../functions/function.php';
session_start();

?>
<!doctype html>
<html lang="fa" dir="rtl">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  <link rel="short cut icon" href="asset/img/OIG (4).jpg">

  <link rel="stylesheet" href="../asset/css/cart.css">
  <link rel="stylesheet" href="../asset/css/main.css">
  <link rel="short cut icon" href="../asset/img/OIG (4).jpg">

  <title>vigen</title>
</head>

<body>
  <!-- start header -->
  <header>
    <?php require_once '../layouts/top_nav.php' ?>
  </header>
  <!-- img header -->
  <?php
  echo '<pre>';
  print_r($_SESSION);
  ?>
     <div class="container-fluid basket">
      <img src="../asset/img/00b89bb25dea90e2f75756d642328444.jpg" alt="">
       
      <div id="paragraf-foot">
          <li>جنس :</li>
          <li>دکمه :</li>
          <li>سبک :</li>
        </div>

      <div class="cluse">
        <h3>gfggggggggggg</h3>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(255,0,0,1)"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 10.5858L9.17157 7.75736L7.75736 9.17157L10.5858 12L7.75736 14.8284L9.17157 16.2426L12 13.4142L14.8284 16.2426L16.2426 14.8284L13.4142 12L16.2426 9.17157L14.8284 7.75736L12 10.5858Z"></path></svg>
      </div>

      <div class="number">
        <!--(+)-->
        <svg onclick="Total()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"></path></svg>
        <div>1</div>
        <!--(_)-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M5 11V13H19V11H5Z"></path></svg>
      </div>

      <div class="price">
        <del>fff</del>
        <p>44444</p>
      </div>
     </div>
     <!--stop basket-->
     <div class="accounting ">
        <h4>جمع خرید شما</h4>
        <p class="price2">4444</p>
        <button>
          <a href="">ادامه</a>
        </button>
     </div>


<footer>
<?php require_once '../layouts/foot.php' ?>
</footer>
  <!-- javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="../asset/js/mainjs.js"></script>
  <script src="../asset/js/number.js"></script>
</body>

</html>