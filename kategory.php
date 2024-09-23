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
  <link rel="stylesheet" href="asset/css/kategory.css">
  <title>vigen</title>
</head>

<body>
  <!-- start header -->
  <header>
    <?php require_once 'layouts/top_nav.php' ?>
  </header>
  <!-- img header -->
  <div class="baner">
    <img src="" alt="" class="w-100 img-fluid">
  </div>
  <!-- start main -->
  <main class="container-fluid">
    <article class="img-main row justify-content-center ">
      <?php
      $catId = $_GET['cat_id'];
      $get_pro = "SELECT * FROM post WHERE cat_id = '$catId'";
      $run_pro = @mysqli_query($con, "SET NAMES utf8");
      $run_pro = @mysqli_query($con, "SET CHARACTER SET utf8");
      $run_pro = mysqli_query($con, $get_pro);
      while($row_pro=mysqli_fetch_array($run_pro)):
      ?>
      <div class="box box-2">
          <img src="asset/img/<?php echo $row_pro["image"]; ?>" alt="">
          <div class="text-to-box">
            <h5><?php echo $row_pro["title"]; ?></h5>
            <del><?php echo $row_pro["ppr"]; ?></del>
            <p><?php echo $row_pro["price"]; ?></p>
            <button class="buttom" id="but1"><a href="prodoct.php?id=<?php echo $row_pro['id']; ?>">صفحه خرید</a></button>
          </div>
      </div>
      <?php endwhile ?>

    </article>

  </main>
  <!-- footer -->
  <?php require_once 'layouts/foot.php' ?>
  <!-- javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="asset/js/mainjs.js"></script>
</body>

</html>