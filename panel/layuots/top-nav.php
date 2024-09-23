<?php
require_once '../../function/helpers.php';
require_once '../../function/pdo_conecton.php';
?>
<div id="header" class="p-sticky-top container-fluid">
      <div class="container" id="head">
        <!-- svg -->
        <div id="svg">
          <div class="search mt-md-2">
            <a href=""></a><a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z" fill="rgba(255,255,255,1)"></path>
                </svg></a>
            <p>Logout</p>
          </div>
          <div class="d-flex">
            <p>Admin</p>
            <!-- menu -->
            <svg onclick="menu(this)" class="d-md-none" id="menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M3 4H21V6H3V4ZM3 11H15V13H3V11ZM3 18H21V20H3V18Z" fill="rgba(255,255,255,1)"></path>
            </svg>
          </div>
        </div>
        <hr>
        <!-- navbar -->
        <nav>
          <ul class="d-md-flex menu">
            <li><a href="../category/indext.php">دسته ها</a></li>
            <li><a href="../index.php">صفحه اصلی</a></li>
            <li><a href="">محصولات</a></li>
          </ul>
          <!-- nav2 -->
          <ul class="d-md-none" id="menu2">
            <li><a href="">categotr</a></li>
            <li><a href="">categotr</a></li>
            <li><a href="">categotr</a></li>
          </ul>
        </nav>
      </div>
    </div>