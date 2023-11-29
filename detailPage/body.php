   <!-- Detail sản Phẩm -->
   <div class="show_product">
        <div class="show_product_left">
            <div class="image_large">
            <img <?php echo 'src="../upload/'.$getProductById['image0'].'"' ?> alt="">
            </div>
            <div class="images">
                <img <?php echo 'src="../upload/'.$getProductById['image0'].'"' ?> alt="">
                <img <?php echo 'src="../upload/'.$getProductById['image1'].'"' ?> alt="">
                <img <?php echo 'src="../upload/'.$getProductById['image2'].'"' ?> alt="">
            </div>
        </div>
        <!-- end left -->
        <div class="show_product_right">
            <div class="show_product_right_name">
                <?php echo $getProductById['name']?>
            </div>
            <div class="show_product_right_cost">
            <?php echo $getProductById['price']?>
            </div>


            <div >
                <span style="margin-bottom: 0.3rem; display: block;">Màu sắc :</span>

                <div class="show_product_right_color">
                <?php
                        foreach ($getDetailProductbyColor as $key => $value) { 
                            echo '<p class="getColorElement" >'.$value['color'].'</p>';
                        }
                ?>

                </div>
            </div  >

            <div>
                <p>Kích thước :</p>
               <div class="show_product_right_size">
                    <?php 
                        foreach ($getDetailProductbySize as $key => $value) {
                           echo '<p  class="getSizeElement" >'.$value['size'].'</p>';
                        }
                    ?>
               </div>
            </div>

           
                        <?php
                        echo '<h1 id="getDatabase" style="display: none;">
                            '.$json_encode.'
                        </h1>'
                        ?>
            <div class="quitity_detailProduct" >
                        <?php 
                            $total = 0 ;
                             foreach ($getDetailProduct as $key => $value) {
                               $total += $value['total'];
                             }
                             echo '<h3 style="margin-bottom: 0.7rem;">Số hàng còn trong kho: <span id="quatityOfProduct">'.$total.'</span></h3>'
                        ?>
            </div>

            <div class="show_product_right_buy">
                <div class="show_product_right_buy_btn">
                    <button class="decline">-</button>
                    <span class="prd_number">1</span>
                    <button class="increase">+</button>
                </div>
                <?php 
                   if (isset($_SESSION['user'])) {
       
                    echo '
                    <p class="show_product_right_buy_cart " >Thêm Vào Giỏ</p>
                    <p class="show_product_right_buy_buyNow">Mua Ngay</p>
                    ';
                }else{
                    echo '
                    <p class="show_product_right_buy_cart show_3" >Thêm Vào Giỏ</p>
                    <p class="show_product_right_buy_buyNow show_3">Mua Ngay</p>
                    
                    ';
                }
                ?>
               
            </div>
            <?php 
                   if (!isset($_SESSION['user'])) {
                    echo '
                    <p style="margin-top: 2rem; color:red;">Bạn Cần Đăng Nhập Để Mua Hàng</p>
                    ';
                }
                ?>
                
            <div class="show_product_right_market">
                <p style="color: #80d301; font-size: 1.5rem;">Gọi Để Mua Hàng Nhanh Hơn</p>
                <p> <span style="font-size: 2.5rem; font-weight: bold;">0931.999.499 </span> (8h30 : 18h30)</p>
                <p  style="color: #80d301; font-size: 1.5rem; margin-top: 5px;">CHÍNH SÁCH BÁN HÀNG</p>
                <p style="display: flex; align-items: center;"><i class="fa-solid fa-truck-fast" style="font-size: 2rem ;margin-right: 10px; color: grey;"></i><span style="font-weight: bold;"> Giao hàng miễn phí </span>
                    (Hóa đơn trên 500k)</p>
                <p style="display: flex;align-items: center;"><i class="fa-solid fa-clock-rotate-left" style="font-size: 2rem ;margin-right: 10px; color: grey;"></i><span style="font-weight: bold;"> Đổi trả miễn phí 14 ngày  </span>
                    (Với mua online)</p>
                <p style="display: flex; align-items: center;"><i class="fa-solid fa-money-bill-wave" style="font-size: 2rem ;margin-right: 10px;color: grey;"></i> <span style="font-weight: bold;"> Thanh toán COD </span>
                    (Hoặc chuyển khoản)</p>
            </div>
        </div>
        <!-- end right -->
    </div>
    <!-- end show Product -->
    <div class="zoomToImage">
    <img <?php echo 'src="../upload/'.$getProductById['image0'].'"' ?> alt="">
        <i class="fa-solid fa-backward"></i>
        <i class="fa-solid fa-forward"></i>
        <i  class="fa-solid fa-xmark"></i>
    </div>
    <div class="zoomToMore">
        
    </div>
    <!-- Body product -->
    <div class="body_product">
        <div class="body_product_nav">
            <p>Thông Tin Sản Phẩm</p>
            <p>Hướng Dẫn Mua Hàng</p>
            <p>Chính Sách Đổi Trả</p>
            <p>Bình Luận</p>
        </div>
        <div class="thongTinSanPham ">
            <?php 
               
                echo '
                <div>

                <div style="display: flex; flex-direction: column;gap: 10px ; font-size: 1.3rem;">
                
                     <p><span>Tên Sản Phẩm: </span><b>'.$getProductById['name'].'</b></p>
                     <p><span>Xuất xứ: </span><b>'.$getProductById['origin'].'</b></p>
                     <p><span>Chất liệu: </span><b>'.$getProductById['fabric'].'</b></p>
                     <p style="width: 100%; border: 1px dashed black"></p>
                </div>
                <div style="width: 500px;overflow: hidden;margin: 0 auto ;margin-top: 2rem;">
                 <img src="../upload/'.$getProductById['image0'].'" alt="" style="width: 100%;object-fit: contain;">
                </div>
                <div style="margin-top: 2rem; font-size: 1.1rem;">
                '.$getProductById['description'].'
                </div>
            </div>
                '
            ?>
            
        </div>
        <div class="huongDanMuaHang none_show">Hướng Dẫn Mua Hàng</div>
        <div class="chinhSachDoiTra none_show">Chính Sách Đổi Trả</div>
        <div class="binhLuan none_show">
            
        <div class="comments" >

        <?php 
           foreach ($getComments as $key => $value) {
               if($key %2 !=0){
                echo '
                <div class="onePerson onePerson_2">
                <div class="img_form">
    
                    <img src="../img/gaiy 8.jpg" alt="">
                </div>
                <div class="onePerson_infor">
                    <p class="onePerson_name">'.$value['nameUser'].'</p>
                    <p class="onePerson_timeComment">'.$value['timestamp'].'</p>
                    <p class="onePerson_Comment">'.$value['comment'].'</p>
                </div>
                 </div>
                ';
               }else{
                echo '
                <div class="onePerson">
                <div class="img_form">
    
                    <img src="../img/gaiy 8.jpg" alt="">
                </div>
                <div class="onePerson_infor">
                    <p class="onePerson_name">'.$value['nameUser'].'</p>
                    <p class="onePerson_timeComment">'.$value['timestamp'].'</p>
                    <p class="onePerson_Comment">'.$value['comment'].'</p>
                </div>
                 </div>
                ';
               }
           }
        ?>

        
        </div>

<?php 
    if (isset($_SESSION['user'])) {
        $id_user = $_SESSION['user']['id'];
        echo '
        <div class="comment-form">
        <form action="index.php?act=setComments&idSanPham='.$id_sanPham.'&idUser='.$id_user.'" method="POST" >
        <input type="text" class="comment-input" name="comments2" placeholder="Nhập bình luận của bạn...">
        <button type="submit" class="comment-submit" name="comment-submit">Gửi</button>
        </form>
        
       </div>
        ';
    }else{
        echo '<h1 style="margin-top: 2rem;display: flex; justify-content: center; align-items: center;"> Bạn cần đăng nhập để bình luận </h1>';
    }
?>
        </div>
    </div>
    
    <!-- Product 2 -->
    
    <div style="margin-top: 4rem;">

    <div class="title_product">
      <p>Sản phẩm liên quan</p>
    </div>

    <div class="list_product_1">

      <?php 
        foreach ($getProductSection as $key => $value) {
          $formatted_number = number_format($value['price'], 0, ',', '.');
          echo '
          <div class="product_container " onclick="navigateToDetail('.$value['id'].')">

      <img src="../upload/'.$value['image0'].'" alt="" style="display: none;">
        <img src="../upload/'.$value['image1'].'" alt="" style="display: none;">
    
      <div class="product_image">
        <img src="../upload/'.$value['image0'].'" alt="">
        
      </div>
      <div class="product_name">
      '.$value['name'].'
      </div>
      <div class="product_price">
      '.$formatted_number.' VND
      </div>

    </div>
          ';
        }
      ?>
    </div>
    <div class="watch_all">
      <span>Xem Tất Cả</span>
      <i class="fa-solid fa-arrow-right"></i>
    </div>
    </div>
