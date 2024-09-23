<?php
require_once 'functions/function.php';
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
  <link rel="stylesheet" href="asset/css/main.css">
  <link rel="stylesheet" href="asset/css/product.css">
  <title>vigen</title>
</head>

<body>
  <header>
    <?php require_once 'layouts/top_nav.php' ?>
  </header>
  <!-- start header -->
  <main>
    <div class="procuct d-md-flex justify-content-center">
      <!-- img -->
      <div class="procuct-img">
        <?php
        $id = $_GET['id'];
        $get_pro = "SELECT * FROM post WHERE id = '$id'";
        $run_pro = @mysqli_query($con, "SET NAMES utf8");
        $run_pro = @mysqli_query($con, "SET CHARACTER SET utf8");
        $run_pro = mysqli_query($con, $get_pro);
        $row_pro = mysqli_fetch_array($run_pro);
        ?>
        <div class="procuctimg-head">
          <a target="_blank" href="asset/img/<?php echo $row_pro["image"]; ?>">
            <img src="asset/img/<?php echo $row_pro["image"]; ?>" alt="" class="img-fluid">
          </a>
        </div>

        <div class="productimg-foot d-flex">
          <a target="_blank" href="asset/img/<?php echo $row_pro["image1"]; ?>">
            <img src="asset/img/<?php echo $row_pro["image1"]; ?>" alt="" class="img-fluid">
          </a>

          <a target="_blank" href="asset/img/<?php echo $row_pro["image2"]; ?>">
            <img src="asset/img/<?php echo $row_pro["image2"]; ?>" alt="" class="img-fluid">
          </a>

          <a target="_blank" href="asset/img/<?php echo $row_pro["image3"]; ?>">
            <img src="asset/img/<?php echo $row_pro["image3"]; ?>" alt="" class="img-fluid">
          </a>
        </div>

      </div>

      <!-- product -->
      <div class="procuct-pragraf">
        <h2><?php echo $row_pro["title"]; ?></h2>

        <div id="size">

          <label for="" class="d-md-block">سایز
            <select name="" id="" placeholder="سایز">
              <option value="">46</option>
              <option value="">48</option>
              <option value="">50</option>
              <option value="">52</option>
              <option value="">54</option>
              <option value="">56</option>
            </select>
          </label>
          <hr>

          <div class="number">
            <!--(+)-->
            <svg id="plus" onclick="addone()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"></path>
            </svg>
            <div id="one">1</div>
            <!--(_)-->
            <svg id="minus" onclick="subtract()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M5 11V13H19V11H5Z"></path>
            </svg>
          </div>
          <hr>
        </div>

        <Div id="price" class="d-flex justify-content-center">
          <p><?php echo $row_pro["price"]; ?> تومان</p>
          <del class="lead"><?php echo $row_pro["ppr"]; ?></del>
        </Div>

        <button id="cart" onclick="cart()"><a href="">افزودن به سبد خرید</a></button>
      </div>
    </div>

    <!-- توضیحات -->
    <div id="tozihat">

      <div class="container d-md-flex justify-content-between" id="tozih">

        <div id="texet-product">
          <h6></h6>
          <p><?php echo $row_pro["body"]; ?></p>
        </div>

        <div id="paragraf-foot">
          <li>جنس :<?php echo $row_pro["jens"]; ?></li>
          <li>دکمه :<?php echo $row_pro["doc"]; ?></li>
          <li>سبک :<?php echo $row_pro["sabk"]; ?></li>
        </div>

      </div>

    </div>

    <!-- محصولات مشابه -->
    <!-- <div class="row justify-content-center">
      <h4>محصولات مشابه</h4>
      <div class="box">
        <img src="img/495075c07071becf5d8d2b5000f34201.jpg" alt="">
        <div class="text-to-box">
          <h5> پیراهن </h5>
          <button><a href="">SHop</a></button>
        </div>
      </div>

      <div class="box">
        <a target="_blank" href="img/cc9933a3d84443a91dd988dd0116ecec.jpg">
          <img src="img/cc9933a3d84443a91dd988dd0116ecec.jpg" alt="">
        </a>
        <div class="text-to-box">
          <h5>شلور کتان</h5>

          <button><a href="">SHop</a></button>
        </div>
      </div>

      <div class="box">
        <a target="_blank" href="img/cc54514107cb4d2ad33e3fb02a25d708.jpg">
          <img src="img/cc54514107cb4d2ad33e3fb02a25d708.jpg" alt="">
        </a>

        <div class="text-to-box">
          <h5>پالتو</h5>

          <button><a href="">SHop</a></button>
        </div>
      </div>

      <div class="box">
        <a target="_blank" href="img/dbe3365de48492c27a215dadb8efcb1e.jpg">
          <img src="img/dbe3365de48492c27a215dadb8efcb1e.jpg" alt="">
        </a>

        <div class="text-to-box">
          <h5>کت و شلوار دامادی</h5>
          <button><a href="">SHop</a></button>
        </div>
      </div>
    </div> -->

  </main>
  <!--footer-->
  <?php require_once 'layouts/foot.php' ?>
  <!-- javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="asset/js/mainjs.js"></script>
  <script src="asset/js/number.js"></script>
</body>

</html>