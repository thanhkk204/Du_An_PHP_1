<div class="admin_right-bottom">

  <nav class="narbar_danhMuc" >
        <ul>
        <li><a href="index.php?act=hienThiDonHang">Xác Nhận Đơn</a></li>
        <li><a href="index.php?act=hienThiDonHangDaHuy">Danh sách Đã Hủy</a></li>
        </ul>
  </nav>
  
  
    <tbody>
      <?php 
      foreach ($getAllBill as $key => $value) {
        $danhSachSanPham = danhSachSanPham($value['id']);
        $id_donHang = $value['id'];
        echo '<div style="background-color: #f5f5f5;
            box-shadow: 0 2px 8px #0da8e6;margin-bottom: 3rem;padding: 1.5rem 0; border-radius: 10px ;overflow: hidden;">';
        echo '
        <table class="table table-bordered table-hover table_donHang">
        <thead>
        <tr>
          <th >Ảnh</th>
          <th>Tên</th>
          <th>Số lượng</th>
          <th>Màu</th>
          <th>Size</th>
          <th>Tổng tiền</th>
          <th>Email user</th>
        </tr>
      </thead>';

      foreach ($danhSachSanPham as $key => $value2) {
        extract($value2) ;
        $formatted_total = number_format($total_money, 0, ',', '.');
        echo '
        <tr>
        <td><img src="../upload/'.$img.'" alt="" width="100"></td>
        <td>'.$name.'</td>
        <td>'.$quatity.'</td>
        <td>'.$color.'</td>
        <td>'.$size.'</td>
        <td>'.$formatted_total.'</td>
        <td>
          '.$email.'
        </td>
      </tr>
        ';
    }

      echo '</tbody>
      </table>';

      echo ' <div style="margin-top: 1.5rem ; width: 100%; text-align: center;">
      <button class="btn btn-primary"><a style="color: white;" href="index.php?act=xacNhanDonHang&id='.$id_donHang.'">Xác nhận</a></button>
      <button class="btn btn-primary" style="color: white;" onclick="huyDonHanghuyDonHangAdmin('.$id_donHang.')">Hủy đơn</button>
      </div> </div> ';

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
