<div class="chiTietDonHang_container">
   <div class="chiTietDonHang_header">
    <a href="index.php?act=xemDonHang">
    <i class="fa-solid fa-chevron-left"></i>
        Trở về
    </a>
    <div>
        <?php 
        echo '<p>Mã Đơn: '.$donHang['id'].'</p>';
        ?>
        
        <span>|</span>
        <?php 
         if ($donHang['trang_thai'] == 'dang_cho') {
           echo '<p class="trangThaiDonHang">Chờ xác nhận</p>';
         }else if($donHang['trang_thai'] == 'dang_giao'){
            echo '<p class="trangThaiDonHang">Đang giao</p>';
         }else{
            echo '<p class="trangThaiDonHang">Đã giao</p>';
         }
        ?>
        
    </div>
   </div>
   <div class="chiTietDonHang_body">
       
        <?php 
        $tongTienThanhToan = 0;
           foreach ($chiTietDonHang as $key => $value) {
            extract($value);
            $tongTienThanhToan += intval($total_money);
            $image0 = getImgDonHang($id_CTSP);
            $formatted_total_money = number_format($total_money, 0, ',', '.');
            echo ' <div class="sanPhamChiTiet">
            <div class="sanPhamChiTiet_1">
                <div class="DonHangImg">

                    <img src="../upload/'.$image0['image0'].'" alt="">
                </div>
                <div>
                    <p>Giày cao cổ nam</p>
                    <p>Số lượng: '.$quatity.'</p>
                </div>
            </div>
            <div class="sanPhamChiTiet_2">
                <p>'.$color.'</p>
            </div>
            <div class="sanPhamChiTiet_3">
                <p>'.$size.'</p>
            </div>
            <div class="sanPhamChiTiet_4">
                <p>'.$formatted_total_money.' đ</p>
            </div>
        </div>';
           }
        ?>
   </div>
   <p style="width: 100%; border: 1px dashed grey; margin-top: 1rem;"></p>
   <div class="chiTietDonHang_footer">
    <div class="right">
        <h2>Địa chỉ nhận hàng</h2>
        <?php 
        echo '<p>'.$donHang["address"].'</p>';
        if ($donHang['trang_thai'] == 'dang_cho') {
            echo '<p class="trangThaiDonHang">Chờ xác nhận</p>';
          }else if($donHang['trang_thai'] == 'dang_giao'){
             echo '<p class="trangThaiDonHang">Đang giao</p>';
          }else{
             echo '<p class="trangThaiDonHang">Đã giao</p>';
          }
        ?>
    </div>
    <div class="left">
        <p style="width: 100%; text-align: end; font-size: 1.2rem;">Đơn vị vận chuyển: 
       
        <?php 
        echo ' <span style="font-weight: bold; color: #0da8e6;">'.$donHang["phuong_thuc_van_chuyen"].'</span>';
        
        ?>
       </p>
        <div class="TongTienDonHang"> 
            <div class="right_price">
                <p>Tổng tiền hàng: </p>
                <?php 
                 $formatted_tongTienThanhToan = number_format($tongTienThanhToan, 0, ',', '.');
                  echo '<p>'.$formatted_tongTienThanhToan.' đ</p>';
                  
                ?>
                
            </div>
            <div class="right_price">
                <p>Phí vận chuyển: </p>
                <p>0đ </p>
            </div>
            <div class="right_price">
                <p>Giảm giá: </p>
                <p>0đ </p>
            </div>
            <div class="right_price">
                <p>Thành tiền: </p>
                <?php 
                echo '<p style="font-weight: bold; color: #0da8e6;">'.$formatted_tongTienThanhToan.' đ</p>';
                ?>
            </div>
            <div class="right_price" style="border: none;">
                <p> <span style="margin-right: 4px; color: #0da8e6;"><i class="fa-solid fa-money-bill"></i></span>Phương thức thanh : </p>
              
                <?php 
                echo '<p>'.$donHang["phuong_thuc_thanh_toan"].'</p>'
                ?>
            </div>
        </div>
    </div>
   </div>
</div>