<div id="header" class="p-sticky-top container-fluid">
  <div class="container" id="head">
    <!-- svg -->
    <div id="svg">
      <div class="search mt-md-2">
        <a href="http://localhost/php_project/auth/login.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z" fill="rgba(255,255,255,1)"></path>
          </svg></a>
        <!-- search -->
        <input type="text" id="search" method="get" action="" placeholder="سرچ کنید...">
        <!-- end search -->
      </div>
      <div>
        <a href="http://localhost/php_project/auth/cart.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M4.00436 6.41662L0.761719 3.17398L2.17593 1.75977L5.41857 5.00241H20.6603C21.2126 5.00241 21.6603 5.45012 21.6603 6.00241C21.6603 6.09973 21.6461 6.19653 21.6182 6.28975L19.2182 14.2898C19.0913 14.7127 18.7019 15.0024 18.2603 15.0024H6.00436V17.0024H17.0044V19.0024H5.00436C4.45207 19.0024 4.00436 18.5547 4.00436 18.0024V6.41662ZM6.00436 7.00241V13.0024H17.5163L19.3163 7.00241H6.00436ZM5.50436 23.0024C4.67593 23.0024 4.00436 22.3308 4.00436 21.5024C4.00436 20.674 4.67593 20.0024 5.50436 20.0024C6.33279 20.0024 7.00436 20.674 7.00436 21.5024C7.00436 22.3308 6.33279 23.0024 5.50436 23.0024ZM17.5044 23.0024C16.6759 23.0024 16.0044 22.3308 16.0044 21.5024C16.0044 20.674 16.6759 20.0024 17.5044 20.0024C18.3328 20.0024 19.0044 20.674 19.0044 21.5024C19.0044 22.3308 18.3328 23.0024 17.5044 23.0024Z" fill="rgba(255,255,255,1)"></path>
          </svg></a>
        <!-- menu -->
        <img src="https://tse4.mm.bing.net/th?id=OIG4.66D0K8I3Q9Mw5gh53WX2&pid=ImgGn" alt="vigen" class="d-md-inline-block">
        <svg onclick="menu(this)" class="d-md-none" id="menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M3 4H21V6H3V4ZM3 11H15V13H3V11ZM3 18H21V20H3V18Z" fill="rgba(255,255,255,1)"></path>
        </svg>
      </div>
    </div>
    <hr>
    <!-- navbar -->
    <nav>
      <?php
      $query = mysqli_query($con, "SELECT * FROM categories");
      $row_pro = mysqli_fetch_array($query);
      ?>  
      <ul class="d-md-flex menu">
        <li><a href="http://localhost/php_project/main.php">صفحه اصلی</a></li>
        <li class="dropdown-toggle style" data-bs-toggle="dropdown">
          کت وشلوار
        </li>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="http://localhost/php_project/kategory.php?cat_id=1">کت وشلوار</a></li>
          <li><a class="dropdown-item" href="http://localhost/php_project/kategory.php?cat_id=3">کت تک</a></li>
        </ul>
        <li><a class="" href="http://localhost/php_project/kategory.php?cat_id=2">بارانی</a></li>
        <li><a href="http://localhost/php_project/kategory.php?cat_id=4">پیرهن</a></li>
        <li><a href="http://localhost/php_project/kategory.php?cat_id=5">پالتو</a></li>
        <li><a href="http://localhost/php_project/auth/vigen.php">درباره ما</a></li>


      </ul>
      <!-- nav2 -->
      <ul class="d-md-none" id="menu2">
        <svg onclick="cluse()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z" fill="rgba(255,255,255,1)"></path>
        </svg>
        <li class="dropdown-toggle" data-bs-toggle="dropdown">
          کت وشلوار
        </li>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="http://localhost/php_project/kategory.php?cat_id=1">کت وشلوار</a></li>
          <li><a class="dropdown-item" href="http://localhost/php_project/kategory.php?cat_id=3">کت تک</a></li>
        </ul>
        <li><a href="http://localhost/php_project/kategory.php?cat_id=4">پیرهن</a></li>
        <li><a class="" href="http://localhost/php_project/kategory.php?cat_id=2">بارانی</a></li>


        <li><a href="http://localhost/php_project/kategory.php?cat_id=5">پالتو</a></li>
        <li><a href="http://localhost/php_project/auth/vigen.php">درباره ما</a></li>
      </ul>
    </nav>
  </div>
</div>