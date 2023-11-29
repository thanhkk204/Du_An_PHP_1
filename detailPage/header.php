<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:ital,wght@1,100;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<link rel="stylesheet" href="../Css/sanPham.css">
<link rel="stylesheet" href="../Css/cartPage.css">
<body class="">
    <div class="header">
        <div class="logo">
        <img src="../img/logo.webp" alt="" />
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
                    <i class="fa-solid fa-caret-down "></i>
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
                <li>
                    Tin Tức
                </li>
                <li onclick="goToHomeFromDetail()">
                    Trang chủ
                </li>
            </ul>
        </div>
        <div class="bag" onclick="getCart()">
            Giỏ Hàng
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <!-- switch  -->
        <div class="SignIn_Switch">
       
  <?php 
     if (isset($_SESSION["user"])) {
      // $value = json_decode($_SESSION["user"]);
      $result =$_SESSION['user'];
      // $result = get_object_vars($value);
      echo '<div class="pop_container"><h4 style="color: white;" class="pop_name" >Chào mừng: '.$result['name'].'</h4><br/>';
     
      if($result['role'] == 'admin'){
        echo '
        <div class="pop_menu"><a href="index.php?act=logOut">Đăng xuất</a>
        <a href="../indexPage/index.php?act=xemDonHang">Xem đơn hàng</a>
        <a href="../adminPage/index.php">Trang quản trị</a>
        </div>
        </div>
        ';
      }else{
        echo '
        <div class="pop_menu"><a href="index.php?act=logOut">Đăng xuất</a>
        <a href="index.php?act=xemDonHang">Xem đơn hàng</a>
        </div>
        </div>
        ';
      }
     }else{

      echo '
      <button class="signIn" >Sign In</button>
      ';

     }
    ?>
            <div class="switch">
                <input type="checkbox" id="switch" hidden>
                <label for="switch" id="switch_change"></label>
            </div>
        </div>
    </div>
    <!-- Form đăng kí -->
    <div class="register">
      <div class="register_form">
        <form action="index.php?act=logIn" method="POST">
          <label for="name_signIn">Email</label>
          <input
            type="text"
            name="name_signIn"
            id="name_signIn"
            placeholder="Your Email..."
          />

          <label for="pass_signIn">Mật Khẩu</label>
          <input
            type="password"
            name="pass_signIn"
            id="pass_signIn"
            placeholder="Your Pass..."
            
          />
          <div class="submitLogin">

              <button type="submit" name="submitLogin">Log In</button>
          </div>
        </form>
        <span>Quên Mật Khẩu?</span>
        <span class="dang_Ki" onclick="goToRegister()">Đăng kí</span>
      </div>
    </div>
 
