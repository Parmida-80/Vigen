<?php
    require_once '../functions/function.php';
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

        <link rel="stylesheet" href="../asset/css/main.css">
        <link rel="stylesheet" href="../asset/css/form.css">
    <title>vigen</title>
</head>

<body>
    <!-- img header -->
    <!-- start main -->
    <main class="container-fluid">

        <form action="" id="Registerlogin">
            <p>VIGEN</p>
            <div class="formRegister">
                <input type="text" placeholder="نام">
                <input type="text" placeholder="نام خانوادگی">
            </div>
            <div class="formRegister">
                <input type="email" placeholder="ایمیل">
                <input type="password" placeholder="رمز">
            </div>
            <div class="formRegister">
                <select name="" id="">
                    <option value="" disabled>جنسیت</option>
                    <option value="">دختر</option>
                    <option value="">پسر</option>
                </select>
                <input type="date" placeholder="تاریخ تولد">
            </div>
            <div class="formRegister">
                <input type="number" placeholder="کدملی">
                <input type="number" placeholder="شماره تلفن">
            </div>
            <div class="formRegister">
                <input type="number" placeholder="شماره تلفن ثابت">
                <input type="number" placeholder="کد پستی">
            </div>
            <div class="formRegister">
                <input type="text" placeholder="استان">
                <input type="text" placeholder=" شهر">
            </div>
            <textarea placeholder="ادرس" name="" id="" cols="30" rows="10"></textarea>
            <button>عضویت</button>
        </form>

    </main>

    </footer>
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script src="../asset/js/mainjs.js"></script>
</body>

</html>