<?php
    require_once '../function/helpers.php';
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= asset('asset/css/top_nav.css'); ?>">
  <title>vigen</title>
</head>
<body>
<header>
<?php require_once 'layuots/top-nav.php'?>
</header>

  <!-- javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="<?= asset('asset/js/mainjs.js'); ?>"></script>
</body>

</html>