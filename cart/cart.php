<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="../Css/cartPage.css">

</head>
<body>
<div class="cart_container">
        <div class="navigation">
            <a href="../indexPage/index.php" id="backToHome">Trang chủ</a>
            <span>/</span>
            <a href=""  id="cartInPage">Giỏ hàng</a>
        </div>
        <div class="cart_title">
            <h1>Cart</h1>
        </div >
        <div class="cart_section">
            <div class="cart_section_title">
                <p>Sản phẩm</p>
                <p>Color</p>
                <p>Size</p>
                <p>Giá</p>
                <p>Số lượng</p>
                <p>Tổng</p>
            </div>
            <div class="cart_items">
            <?php 
                    $carts = $_COOKIE['carts'];
                    if(isset($carts)){
                        
                    $newCarts = json_decode($carts);
                    foreach ($newCarts as $key => $value2) {
                        $value = get_object_vars($value2);
                        
                        $total =  intval($value['quatity'])  * intval($value['price'] ) ;
                        $formatted_total = number_format($total, 0, ',', '.');
                        $formatted_price = number_format($value['price'], 0, ',', '.');
                        $quatity = 0 ;
                        if (intval($value['quatity']) > intval($value['total'])){
                            $quatity = $value['total'] ;
                        }else{
                            $quatity = $value['quatity'] ;
                        }
                       echo ' 
                       <div class="cart_section_product">
                       <div class="product_infor">
                           <i class="fa-solid fa-x xmark"></i>
                           <img src=" ../upload/'.$value['img'].'" alt="" class="image">
   
                           <div class="product_origin">
                               <div class="product_name">'.$value['name'].'</div>
                               <div class="product_brand">'.$value['brand'].'</div>
                           </div>
   
                       </div>
                       <div class="product_color">
                            '.$value['color'].'
                       </div>
                       <div class="product_size">
                            '.$value['size'].'
                       </div>
                       <div class="product_price">
                       '.$formatted_price.'
                       </div>
                       <div class="product_quatity">
                           <div class="show_product_right_buy_btn">
                           <button class="decline">-</button>
                           <span class="prd_number">'.$quatity.'</span>
                           <button class="increase">+</button>
                       </div>
                       </div>
                       <div class="product_total">
                       '.$formatted_total.'
                       </div>
                       <p class="getTotalQuality" style="display: none;">'.$value['total'].'</p>
                   </div>
                       ';
                    }

                }else{
                    echo 'Bạn cần chọn sản phẩm' ;
                }
            ?>
               <div class="product_size">

               </div>
            </div>
        </div>

        <div class="footer_cart">
            <p class="silly">
                Special instructions
            </p>
            <div class="total_money">
                <div class="money">14.000.000 đ</div>
                <p style="color: red;">Không cần thuế và không được giảm giá</p>

                
                
                <?php
                if (isset($_SESSION['user'])) {
                    if (!empty($newCarts)) {
                       
                        echo '<button class="checkOut">Thanh Toán</button>';
                    }else{
                        echo '<button class="checkOut opacity_button">Thanh Toán</button>';
                        echo '<p style="color: red;margin-top: 1rem ;">Bạn cần ít nhất 1 sản phẩm trong giỏ hàng</p>';
                    }
                }else{
                    echo '<button class="checkOut opacity_button">Thanh Toán</button>';
                    echo '<p style="color: red;margin-top: 1rem ;">Bạn cần đăng nhập để thanh toán</p>';
                }
                ?>
            </div>
        </div>
       
    </div>
    <script src="../Trang2/cartIndex.js"></script>
</body>
</html>