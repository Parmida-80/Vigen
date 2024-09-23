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

  <link rel="stylesheet" href="../asset/css/form.css">
  <title>vigen</title>
</head>

<body>
  <!-- start header -->

  <!-- img header -->
  <!-- start main -->
  <main class="container-fluid">
    <div id="login-save">
      <form action="" id="login">
          <p>VIGEN</p>

        <label for="name">
          <svg id="name" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12.1597 16C10.1243 16 8.29182 16.8687 7.01276 18.2556C8.38039 19.3474 10.114 20 12 20C13.9695 20 15.7727 19.2883 17.1666 18.1081C15.8956 16.8074 14.1219 16 12.1597 16ZM12 4C7.58172 4 4 7.58172 4 12C4 13.8106 4.6015 15.4807 5.61557 16.8214C7.25639 15.0841 9.58144 14 12.1597 14C14.6441 14 16.8933 15.0066 18.5218 16.6342C19.4526 15.3267 20 13.7273 20 12C20 7.58172 16.4183 4 12 4ZM12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5ZM12 7C10.8954 7 10 7.89543 10 9C10 10.1046 10.8954 11 12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7Z" fill="currentColor"></path></svg>
          <input type="text" placeholder="نام " >
        </label>
  
        <label for="email">
          <svg id="email" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C13.6418 20 15.1681 19.5054 16.4381 18.6571L17.5476 20.3214C15.9602 21.3818 14.0523 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12V13.5C22 15.433 20.433 17 18.5 17C17.2958 17 16.2336 16.3918 15.6038 15.4659C14.6942 16.4115 13.4158 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C13.1258 7 14.1647 7.37209 15.0005 8H17V13.5C17 14.3284 17.6716 15 18.5 15C19.3284 15 20 14.3284 20 13.5V12ZM12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9Z"
              fill="rgba(0,0,0,1)"></path>
          </svg>
          <input type="email" placeholder=" ایمیل" >
        </label>
  
        <label for="password">
          <svg id="password" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.0003 13V14C17.0003 16.7696 16.3364 19.445 15.0853 21.8455L14.8585 22.2663L13.1116 21.2924C14.2716 19.2115 14.9211 16.8817 14.9935 14.4559L15.0003 14V13H17.0003ZM11.0003 10H13.0003V14L12.9948 14.3787C12.9153 17.1495 11.9645 19.7731 10.3038 21.928L10.073 22.2189L8.52406 20.9536C10.0408 19.0969 10.9145 16.8017 10.9943 14.3663L11.0003 14V10ZM12.0003 6C14.7617 6 17.0003 8.23858 17.0003 11H15.0003C15.0003 9.34315 13.6571 8 12.0003 8C10.3434 8 9.00025 9.34315 9.00025 11V14C9.00025 16.2354 8.1806 18.3444 6.72928 19.9768L6.51767 20.2067L5.06955 18.8273C6.23328 17.6056 6.92099 16.0118 6.99381 14.3027L7.00025 14V11C7.00025 8.23858 9.23883 6 12.0003 6ZM12.0003 2C16.9708 2 21.0003 6.02944 21.0003 11V14C21.0003 15.6979 20.7985 17.3699 20.4035 18.9903L20.2647 19.5285L18.3349 19.0032C18.726 17.5662 18.9475 16.0808 18.9919 14.5684L19.0003 14V11C19.0003 7.13401 15.8662 4 12.0003 4C10.4279 4 8.97663 4.51841 7.80805 5.39364L6.38308 3.96769C7.92267 2.73631 9.87547 2 12.0003 2ZM4.96794 5.38282L6.39389 6.8078C5.5635 7.91652 5.0543 9.27971 5.00431 10.7593L4.99961 10.999L5.00378 13C5.00378 14.1195 4.73991 15.2026 4.24263 16.1772L4.08648 16.4663L2.34961 15.4747C2.72889 14.8103 2.95077 14.0681 2.99539 13.2924L3.00378 13L3.00361 11C3.00025 8.87522 3.73656 6.92242 4.96794 5.38282Z" fill="currentColor"></path></svg>
          <input type="password" placeholder="پسورد" >
        </label>
  
        <button id="loginbuttom">ورود</button>

        <div id="paragraflogin">
          <p>ثبت نام نکرده اید <a href="Registerlogin.php">ثبت نام</a>کنید</p>
        </div>
      </form>

      <div class="imglogin d-md-inline">
        <img class="d-md-inline imglogin" src="../asset/img/form3.png" alt="">
      </div>
    </div>
  </main>

  </footer>
  <!-- javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="../asset/js/mainjs.js"></script>
</body>

</html>