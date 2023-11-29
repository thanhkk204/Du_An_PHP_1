
<div class="container_table">
      <nav class="narbar_danhMuc">
      <ul>
      <li><a href="index.php?act=xemDonHang">Đơn hàng của tôi</a></li>
      <li><a href="index.php?act=xemDonHangDaXoa">Đơn hàng đã hủy</a></li>
      </nav>

    <table class="table table-bordered table-hover table_donHang">
      <thead>
        <tr>
          <th>Ảnh</th>
          <th>Tên</th>
          <th>Số lượng</th>
          <th>Màu</th>
          <th>Tổng tiền</th>
          <th>Trạng thái</th>
          <th>Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($danhSachDonHang as $key => $value) {
                extract($value) ;
            if ($trang_thai == 'dang_giao') {
              echo '
              <tr>
              <td><img src="../upload/'.$img.'" alt="" width="100"></td>
              <td>'.$name.'</td>
              <td>'.$quatity.'</td>
              <td>'.$color.'</td>
              <td>'.$total_money.'</td>
              <td>'.$trang_thai.'</td>
              <td>
                <button class="btn btn-primary" style="opacity: 0.4; pointer-events: none;" onclick="huyDonHangClient('.$id.')">Hủy Đơn</button>
              </td>
            </tr>
              ';
            }else{

              echo '
              <tr>
              <td><img src="../upload/'.$img.'" alt="" width="100"></td>
              <td>'.$name.'</td>
              <td>'.$quatity.'</td>
              <td>'.$color.'</td>
              <td>'.$total_money.'</td>
              <td>'.$trang_thai.'</td>
              <td>
                <button class="btn btn-primary" onclick="huyDonHangClient('.$id.')">Hủy Đơn</button>
              </td>
            </tr>
              ';
            }
          }
        ?>
        <!-- huyDonHangClient -->
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