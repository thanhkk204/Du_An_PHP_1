
<div class="container_table">
      <nav class="narbar_danhMuc">
      <ul>
      <li><a href="index.php?act=xemDonHang">Đơn hàng của tôi</a></li>
      <li><a href="index.php?act=xemDonHangDaXoa">Đơn hàng đã hủy</a></li>
      </nav>

        <?php 
          foreach ($danhSachDonHang as $key => $value) {
                extract($value) ;
                $trang_thai_don_hang = $trang_thai ;
                echo '<div style="background-color: #f5f5f5;
            box-shadow: 0 2px 8px #0da8e6;margin-bottom: 3rem;padding: 1.5rem 0; border-radius: 10px ;overflow: hidden;">';
                echo ' <table class="table table-bordered table-hover table_donHang">
                <thead>
                  <tr>
                    <th >Ảnh</th>
                    <th>Tên</th>
                    <th>Số lượng</th>
                    <th>Màu</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                  </tr>
                </thead>
                <tbody>';
                 $getDonHangDaHuy = getDonHangDaHuy($id);
                foreach ($getDonHangDaHuy as $key => $value2) {
                  extract($value2) ;
                  $formatted_total = number_format($total_money, 0, ',', '.');
                  $img = getDonHangDaHuyImg($id_CTSP);
                  if ($trang_thai_don_hang == 'huy_don_hang_admin') {
                  
                    echo '
                    <tr>
                    <td><img src="../upload/'.$img['image0'].'" alt="" width="100"></td>
                    <td>'.$name.'</td>
                    <td>'.$quatity.'</td>
                    <td>'.$color.'</td>
                    <td>'.$formatted_total.'</td>
                    <td>
                    Admin hủy đơn
                    </td>
                  </tr>
                    ';
                  }else{
                    echo '
                    <tr>
                    <td><img src="../upload/'.$img['image0'].'" alt="" width="100"></td>
                    <td>'.$name.'</td>
                    <td>'.$quatity.'</td>
                    <td>'.$color.'</td>
                    <td>'.$formatted_total.'</td>
                    <td>
                    Bạn hủy đơn
                    </td>
                  </tr>
                    ';
                  }
                }
                echo '</tbody>
                </table> </div>';
          }
        ?>
      
</div>

<?php if(isset($message) && $message != ''){
       echo '<p style="color:red ;margin-top: 1rem;">'.$message.'</p>';
       }else{
        echo '';
       } ?> 

       <?php if(isset($err) && $err != ''){
       echo '<p style="color:red ; margin-top: 1rem;">'.$err.'</p>';
       }else{
        echo '';
       } ?> 