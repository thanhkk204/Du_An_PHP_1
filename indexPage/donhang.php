
<div class="container_table">
      <nav class="narbar_danhMuc">
      <ul>
      <li><a href="index.php?act=xemDonHang">Đơn hàng của tôi</a></li>
      <li><a href="index.php?act=xemDonHangDaXoa">Đơn hàng đã hủy</a></li>
      </nav>

        <?php 
        foreach ($donHangCuaUser as $key => $value) {
          $key ++ ;
          $danhSachDonHang = getChi_tiet_don_($value['id']);
          $id_donHang = $value['id'];
          $trang_thai_don_hang = $value['trang_thai'];
          if (empty($danhSachDonHang)) {
            xoaDonHangAll($value['id']);
          }else{

            echo '<div style="background-color: #f5f5f5;
            box-shadow: 0 2px 8px #0da8e6;margin-bottom: 3rem;padding: 1.5rem 0; border-radius: 10px ;overflow: hidden;">';
          echo '<table class="table table-bordered table-hover table_donHang">
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
          <tbody>';
          
          foreach ($danhSachDonHang as $key => $value2) {
                extract($value2) ;

                $formatted_total = number_format($total_money, 0, ',', '.');
            if ($trang_thai_don_hang == 'dang_giao') {
             
              echo '
              <tr>
              <td><img src="../upload/'.$img.'" alt="" width="100"></td>
              <td>'.$name.'</td>
              <td>'.$quatity.'</td>
              <td>'.$color.'</td>
              <td>'.$formatted_total.'</td>
              <td>Đang giao</td>
              <td>
                <button class="btn btn-primary" style="opacity: 0.4; pointer-events: none;" onclick="huyDonHangClient('.$id.')">Loại</button>
              </td>
            </tr>
              ';
              
            }else if($trang_thai_don_hang == 'dang_cho'){

              echo '
              <tr>
              <td><img src="../upload/'.$img.'" alt="" width="100"></td>
              <td>'.$name.'</td>
              <td>'.$quatity.'</td>
              <td>'.$color.'</td>
              <td>'.$formatted_total.'</td>
              <td>Đang chờ xác nhận</td>
              <td>
                <button class="btn btn-primary" onclick="huyDonHangClient('.$id.')">Loại</button>
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
              <td>'.$formatted_total.'</td>
              <td>Đã giao</td>
              <td>
                <button class="btn btn-primary" style="opacity: 0.4; pointer-events: none;" onclick="huyDonHangClient('.$id.')">Loại</button>
              </td>
            </tr>
              ';
            }
          }
          echo '</tbody>
              </table>';
          if ($trang_thai_don_hang == 'dang_giao' || $trang_thai_don_hang == 'da_giao'){

            echo '<div style="width: 100%; text-align: center;margin-top: 1.5rem;">
            <button class="btn btn-primary" 
            onclick="huyDonHangClientAll('.$id_donHang.')" 
            style="font-size: 1.2rem; transition: all 0.3s ease-in-out;width: 170px;opacity: 0.4; pointer-events: none;">Hủy Đơn
            </button>
  
            <button class="btn btn-primary" 
            onclick="chiTietDonHang('.$id_donHang.')" 
            style="font-size: 1.2rem; transition: all 0.3s ease-in-out;width: 170px;">Chi Tiết
            </button>
            
            </div> </div> ';
          }else{
            echo '<div style="width: 100%; text-align: center;margin-top: 1.5rem;">
            <button class="btn btn-primary" 
            onclick="huyDonHangClientAll('.$id_donHang.')" 
            style="font-size: 1.2rem; transition: all 0.3s ease-in-out;width: 170px;">Hủy Đơn
            </button>
  
            <button class="btn btn-primary" 
            onclick="chiTietDonHang('.$id_donHang.')" 
            style="font-size: 1.2rem; transition: all 0.3s ease-in-out;width: 170px;">Chi Tiết
            </button>
            
            </div> </div> ';
          }
          }
          
          
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