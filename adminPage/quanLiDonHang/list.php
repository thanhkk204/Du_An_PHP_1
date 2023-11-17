<table class="table table-bordered table-hover table_donHang">
  <thead>
    <tr>
      <th>Ảnh</th>
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
              <button class="btn btn-primary"><a href="index.php?act=xacNhanDonHang&id='.$id.'">Xác nhận</a></button>
            </td>
          </tr>
            ';
      }
    ?>
    
  </tbody>
</table>
