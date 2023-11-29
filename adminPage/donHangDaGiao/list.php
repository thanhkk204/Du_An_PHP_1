
<div class="admin_right-bottom">
  <table class="table table-bordered table-hover table_donHang">
    <thead>
      <tr>
        <th>Ảnh</th>
        <th>Tên</th>
        <th>Số lượng</th>
        <th>Màu</th>
        <th>Tổng tiền</th>
        <th>Trạng thái</th>
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
                '.$trang_thai.'
              </td>
            </tr>
              ';
        }
      ?>
    </tbody>
  </table>

</div>
