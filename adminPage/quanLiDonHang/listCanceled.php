
<div class="admin_right-bottom">
    <nav class="narbar_danhMuc">
          <ul>
          <li><a href="index.php?act=hienThiDonHang">Xác Nhận Đơn</a></li>
          <li><a href="index.php?act=hienThiDonHangDaHuy">Danh sách Đã Hủy</a></li>
          <li><a href="index.php?act=tatCaDonHang">Tất cả đơn hàng</a></li>
          </ul>
    </nav>
    
        <?php 
        foreach ($getAllBillCanceled as $key => $value) {
          $id_donHang = $value['id'];
          $trang_thai_don_hang = $value['trang_thai'];
          $email = $value['email'];
          $getListCanceled = getListCanceled($id_donHang);
          echo '<div style="background-color: #f5f5f5;
          box-shadow: 0 2px 8px #0da8e6;margin-bottom: 3rem;padding: 1.5rem 0; border-radius: 10px ;overflow: hidden;">';
          echo '<table class="table table-bordered table-hover table_donHang">
          <thead>
            <tr>
             <th>ID</th>
              <th>Ảnh</th>
              <th>Email người dùng</th>
              <th>Số lượng</th>
              <th>Màu</th>
              <th>Size</th>
              <th>Tổng tiền</th>
              <th>Trạng thái</th>
            </tr>
          </thead>
          <tbody>';

          foreach ($getListCanceled as $key => $value2) {
            extract($value2) ;
            $formatted_total = number_format($total_money, 0, ',', '.');

            if ( $trang_thai_don_hang == 'huy_don_hang_user') {
            
              echo '
              <tr>
              <td>'.$id_donHang.'</td>
              <td><img src="../upload/'.$img.'" alt="" width="100"></td>
              <td>'.$email.'</td>
              <td>'.$quatity.'</td>
              <td>'.$color.'</td>
              <td>'.$size.'</td>
              <td>'.$formatted_total.'</td>
              <td>
              Người dùng hủy đơn
              </td>
            </tr>
              ';
            }else{
              echo '
              <tr>
              <td>'.$id_donHang.'</td>
              <td><img src="../upload/'.$img.'" alt="" width="100"></td>
              <td>'.$email.'</td>
              <td>'.$quatity.'</td>
              <td>'.$color.'</td>
              <td>'.$size.'</td>
              <td>'.$formatted_total.'</td>
              <td>
              Admin hủy đơn
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
