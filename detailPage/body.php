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
            <p style="font-size: 1.4rem; padding-bottom: 30px;border-bottom: 3px dashed black;"> <span style="margin-bottom: 10px; display: inline-block;"> Giày Cổ Cao ZOE Màu Đen (Zebra High Zoe)</span> <br> 
                Giày do thương hiệu Zoe gia công & sản xuất <br>
                Xuất xứ: VIETNAM</p>
            
                <p style="margin-top: 15px; font-size: 1.2rem;">Giày cao cổ của ZOE là một sản phẩm giày thời trang sang trọng và hiện đại. Giày cổ cao của ZOE có nhiều mẫu mã và màu sắc khác nhau để người dùng dễ dàng lựa chọn theo sở thích và phong cách của mình. Giày dáng cổ cao có thể được kết hợp với nhiều trang phục khác nhau, từ váy ngắn, quần jean đến quần âu, mang lại cho người mang một vẻ ngoài thời trang, cá tính và sang trọng.</p>

                <img <?php echo 'src="../upload/'.$getProductById['image1'].'"' ?> alt="">
                <div style="width: 100%;text-align: center;margin-top: 20px;font-size: 1.3rem;"><p>Giày Cao Cổ Zoe Màu Đen phối đồ cực chất</p></div>
                <div style="font-size: 1.3rem; margin-top: 20px;"><b style="margin: 10px 0; display: inline-block;"> Mô tả sản phẩm: </b> <br>
                    Zoe Zebra High Black HT002 / Giày cao cổ Đen ZOE <br>
                    Xuất xứ: Việt Nam <br>
                    Size: 35 - 44 <br>
                    Màu sắc: Đen <br>
                    Thiết kế: trẻ trung, thời trang, Cổ cao thoải mái. <br>
                    Phong cách: Giày Cổ cao (giày cao cổ) sẽ là lựa chọn phù hợp với các bạn nam và nữ sử dụng để đi chơi, đi làm <br>
                    Chất liệu đế: Đế cao su lưu hoá nguyên khối, tính đàn hồi, chịu nhiệt và đặc biệt bền chắc. Đế giày cổ cao có độ dày 3.2cm <br>
                    Chất liệu vải: Vải Linen với chất liệu không ố vàng, phai màu. Đặc biệt chất vải mềm mại không làm đau chân <br>
                    Lót giày: Lót giày cao cổ eva êm ái, chống bí hơi, thoát khí, không tạo mùi dù bạn đi liên tục 24/24. <br>
                     <b style="margin: 10px 0; display: inline-block;">Hướng dẫn vệ sinh giày. </b> <br>
                    Nên vệ sinh giày vào ban ngày hạn chế vệ sinh giày vào buổi tối <br>
                    Không để giày ngâm nước quá lâu hoặc mang giày khi đi trời mưa.  <br>
                    Định kỳ vệ sinh giày, không sử dụng thuốc tẩy để giặt <br>
                    Quấn khăn giấy kín quanh giày và đem đi phơi khô dưới ánh mặt trời hoặc bóng râm. <br>
                    Trong thời gian dài không mang, nên vệ sinh giày sạch sẽ và gói giày lại bằng giấy. <br>
                    <b style="margin: 10px 0; display: inline-block;">Chính sách đổi hàng và bảo hành sản phẩm.</b> <br>
                    Chấp nhận đổi hàng trong các trường hợp hàng bị lỗi, không đúng mẫu, không vừa size <br>
                    Hỗ trợ đổi size và đổi mẫu trong vòng 15 ngày kể từ khi nhận sản phẩm. <br>
                    Hỗ trợ phí vận chuyển để khách hàng đổi sản phẩm mới nếu vì lý do lỗi kỹ thuật
                    
                </div>
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/wPCaW11LFIw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style=" margin: 30px 0 80px 0; width: 100%;height: 900px;"></iframe> -->
        </div>
        <div class="huongDanMuaHang none_show">Hướng Dẫn Mua Hàng</div>
        <div class="chinhSachDoiTra none_show">Chính Sách Đổi Trả</div>
        <div class="binhLuan none_show">
            
        <div class="comments">

        <div class="onePerson">
            <div class="img_form">

                <img src="../img/gaiy 8.jpg" alt="">
            </div>
            <div class="onePerson_infor">
                <p class="onePerson_name">Lê Huy Thanh</p>
                <p class="onePerson_timeComment">14:20:2003</p>
                <p class="onePerson_Comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore,
                     reiciendis vitae aliquam harum alias itaque amet in mag
                     ni soluta rem autem, error praesentium dolores facere vel fu
                     git corporis totam et?
                </p>
            </div>
        </div>
        <div class="onePerson onePerson_2">
            <div class="img_form">

                <img src="../img/gaiy 8.jpg" alt="">
            </div>
            <div class="onePerson_infor">
                <p class="onePerson_name">Lê Huy Thanh</p>
                <p class="onePerson_timeComment">14:20:2003</p>
                <p class="onePerson_Comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore,
                     reiciendis vitae aliquam harum alias itaque amet in mag
                     ni soluta rem autem, error praesentium dolores facere vel fu
                     git corporis totam et?
                </p>
            </div>
        </div>
        <div class="onePerson">
            <div class="img_form">

                <img src="../img/gaiy 8.jpg" alt="">
            </div>
            <div class="onePerson_infor">
                <p class="onePerson_name">Lê Huy Thanh</p>
                <p class="onePerson_timeComment">14:20:2003</p>
                <p class="onePerson_Comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore,
                     reiciendis vitae aliquam harum alias itaque amet in mag
                     ni soluta rem autem, error praesentium dolores facere vel fu
                     git corporis totam et?
                </p>
            </div>
        </div>
        
        </div>

<?php 

    if (isset($_SESSION['user'])) {
       
        echo '
        <div class="comment-form">
        <input type="text" class="comment-input" placeholder="Nhập bình luận của bạn...">
       <button class="comment-submit">Gửi</button>
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
            <p>Sản Phẩm Liên Quan</p>
        </div>
    
        <div class="list_product_1">
            <div class="product_large">
                <div class="product">
                    <i class="fa-solid fa-heart"></i>
                    <img <?php echo 'src="../upload/'.$getProductById['image0'].'"' ?> alt="">
                    <div class="watch_shoe">Xem Ngay</div>
                </div>
                <div class="product_name">ZOE Authetic White</div>
                <div class="product_cost">850.000đ</div>
            </div>
            <div class="product_large">
                <div class="product">
                    <i class="fa-solid fa-heart"></i>
                    <img <?php echo 'src="../upload/'.$getProductById['image0'].'"' ?> alt="">
                    <div class="watch_shoe">Xem Ngay</div>
                </div>
                <div class="product_name">Zebra High Black</div>
                <div class="product_cost">700.000đ</div>
            </div>
            <div class="product_large">
                <div class="product">
                    <i class="fa-solid fa-heart"></i>
                    <img <?php echo 'src="../upload/'.$getProductById['image0'].'"' ?> alt="">
                    <div class="watch_shoe">Xem Ngay</div>
                </div>
                <div class="product_name">ZOE Authetic N'Loop</div>
                <div class="product_cost">650.000đ</div>
            </div>
            <div class="product_large">
                <div class="product">
                    <i class="fa-solid fa-heart"></i>
                    <img <?php echo 'src="../upload/'.$getProductById['image0'].'"' ?> alt="">
                    <div class="watch_shoe">Xem Ngay</div>
                </div>
                <div class="product_name">ZOE Black Mule</div>
                <div class="product_cost">420.000đ</div>
            </div>
        </div>
        <div class="watch_all">
            <span>Xem Tất Cả</span>
            <i class="fa-solid fa-arrow-right  "></i>
        </div>
    </div>
