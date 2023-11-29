<div class="admin_right-bottom">

  <nav class="narbar_danhMuc" >
        <ul>
        <li><a href="index.php?act=hienThiDonHang">Xác Nhận Đơn</a></li>
        <li><a href="index.php?act=hienThiDonHangDaHuy">Danh sách Đã Hủy</a></li>
        </ul>
  </nav>
  
  <table class="table table-bordered table-hover table_donHang">
    <thead>
      <tr>
        <th >Ảnh</th>
        <th>Tên</th>
        <th>Số lượng</th>
        <th>Màu</th>
        <th>Tổng tiền</th>
        <th>Xác nhận</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($danhSachDonHang as $key => $value) {
              extract($value) ;
  
              echo '
              <tr>
              <td><img src="../upload/'.$img.'" alt="" width="100"></td>
              <td>'.$name.'</td>
              <td>'.$quatity.'</td>
              <td>'.$color.'</td>
              <td>'.$total_money.'</td>
              <td>
                <button class="btn btn-primary"><a style="color: white;" href="index.php?act=xacNhanDonHang&id='.$id.'">Xác nhận</a></button>
                <button class="btn btn-primary" style="color: white;" onclick="huyDonHanghuyDonHangAdmin('.$id.')">Hủy đơn</button>
              </td>
            </tr>
              ';
        }
      ?>
    </tbody>
  </table>
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
