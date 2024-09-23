
<?php
require_once '../../function/helpers.php';
require_once '../../function/pdo_conecton.php';
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

    <link rel="stylesheet" href="../../asset/css/form.css">
    <title>vigen</title>
</head>

<body>
    <!-- start header -->

    <!-- img header -->
    <!-- start main -->
    <main class="container-fluid">

        <form action="<?= url('panel/post/creat.php')?>" method="post" id="Registerlogin" enctype="multipart/form-data">
            <p>VIGEN</p>
            <div class="formRegister">
                <input type="text" placeholder="نام">
                <input type="text" placeholder="دسته">
            </div>
            <div class="formRegister">
                <input type="number" placeholder="قیمت">
                <input type="number" placeholder="تخفیف">
            </div>
            <div class="formRegister">
                 <select name="" id="">
                 <option value="" disabled>دسته</option>
                    <?php
                    global $pdo;
                    $query="SELECT * FROM categories";
                    $statement=$pdo->prepare($query);
                    $statement->execute();
                    $categores=$statement->fetchALL();
                    foreach($categores as $category){?>
                    <option value="<?= $category->id?>">دختر</option>
                    <?php }?>
                    <option value="">پسر</option>
                </select>
                <!-- <input type="date" placeholder=""> -->
                <input type="file">
            </div>
           
            <textarea placeholder="توضیحات" name="" id="" cols="30" rows="10"></textarea>
            <button>ارسال</button>
        </form>

    </main>

    </footer>
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>