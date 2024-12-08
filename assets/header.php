<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/carousel.css" />
    <link rel="stylesheet" href="assets/css/blog.css">
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/dangky.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <div class="header-top">
        <ul>
          <?php
                if($_SESSION['dangnhap'] || $_SESSION['dangnhapql'] || $_SESSION['dangnhapnv']){
                  echo '<div style="color: #efefef; line-height: 50px; padding-right: 10px;"> <b>Chào, </b>'. $_SESSION['username'].'</div>';
                  echo '<li><a class="dang-ky" href="index.php?page=dangxuat">Đăng xuất</a></li>';
                }
                   else{
                    echo '<li><a class="dang-nhap" href="index.php?page=dangnhap">Đăng nhập</a></li>';
                    echo '<li><a class="dang-ky" href="index.php?page=dangky">Đăng ký</a></li>';
                   }
                   
                 if($_SESSION['dangnhapnv']){
                  echo '<li><a class="dang-ky" href="">Xem lịch làm</a></li>';
                 } 
                ?>    
        </ul>
      </div>
      <div class="inner-wrap">
        <div class="inner-logo">
          <a href="#">
            <img src="assets/images/logoct.png" alt="Logo" />
          </a>
        </div>
        <div class="inner-menu">
          <ul>
            <li><a href="index.php?page=trangchu">TRANG CHỦ</a></li>
            <li><a href="./products.html">SẢN PHẨM</a></li>
            <li><a href="./party-booking.html">DỊCH VỤ</a></li>
            <li><a href="index.php?page=intro">GIỚI THIỆU</a></li>
            <li><a href="index.php?page=blog">BLOG</a></li>
            <li><a href="index.php?page=restaurant">NHÀ HÀNG</a></li>
            <?php
            if($_SESSION['dangnhapql']){
              echo '<li><a href="index.php?page=quanly">QUẢN LÝ</a></li>';
            }
            ?>
          </ul>
          </ul>
        </div>
        <div class="inner-cart">
          <a href="./cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
    </header>
    <!-- End Header -->