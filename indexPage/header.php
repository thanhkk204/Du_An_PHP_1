<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:ital,wght@1,100;1,300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../Css/index.css">

  </head>
  <body class="">
    <div class="header">
      <div class="logo">
        <img src="./img/logo.webp" alt="" />
      </div>
      <div class="nav">
        <ul>
          <li>
            Sản Phẩm
            <i class="fa-solid fa-caret-down"></i>
            <div class="li_list hide">
              <ul>
                <li>
                  <i class="fa-solid fa-arrow-right"></i>
                  <a href="#">Vải Linen</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right"></i>
                  <a href="#">Chất Liệu Da</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right"></i>
                  <a href="#">Vải Canvas</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            Bộ Sưu Tập
            <i class="fa-solid fa-caret-down"></i>
            <div class="li_list hide">
              <ul>
                <li>
                  <i class="fa-solid fa-arrow-right"></i>
                  <a href="#">SUMMER COLLECTION</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right"></i>
                  <a href="#">ZOE THÊU</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right"></i>
                  <a href="#">ZOE CRAFT</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right"></i>
                  <a href="#">BACK TO SCHOOL</a>
                </li>
              </ul>
            </div>
          </li>
          <li>Tin Tức</li>
          <li>Hệ Thống Cửa Hàng</li>
        </ul>
      </div>
      <div class="bag">
        Giỏ Hàng
        <i class="fa-solid fa-cart-shopping"></i>
      </div>
      <!-- switch  -->
      <div class="SignIn_Switch">
        <button class="signIn">Sign In</button>
        <div class="switch">
          <input type="checkbox" id="switch" hidden />
          <label for="switch" id="switch_change"></label>
        </div>
      </div>
    </div>
    <!-- Form đăng kí -->
    <div class="register">
      <div class="register_form">
        <form action="#">
          <label for="name_signIn">Tên Tài Khoản</label>
          <input
            type="text"
            name="name_signIn"
            id="name_signIn"
            placeholder="Your Name..."
          />

          <label for="pass_signIn">Mật Khẩu</label>
          <input
            type="password"
            name="pass_signIn"
            id="pass_signIn"
            placeholder="Your Pass..."
          />
        </form>
        <span>Quên Mật Khẩu?</span>
        <span class="dang_Ki">Đăng kí</span>
      </div>
    </div>
    <!-- banner 1 -->
    <div class="banner">
      <img src="../img/bannner 1.jpg" alt="">
    </div>



 
