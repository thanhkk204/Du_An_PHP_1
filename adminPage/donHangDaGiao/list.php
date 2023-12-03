
<div class="admin_right-bottom">
  
    
      <?php 

      foreach ($getBillDrivering as $key => $value) {
        $id_donHang = $value['id'];
        $getProductDriving = getProductDriving($id_donHang);
        echo '<div style="background-color: #f5f5f5;
        box-shadow: 0 2px 8px #0da8e6;margin-bottom: 3rem;padding: 1.5rem 0; border-radius: 10px ;overflow: hidden;">';
        echo '
        <table class="table table-bordered table-hover table_donHang">
        <thead>
          <tr>
            <th>Ảnh</th>
            <th>Tên</th>
            <th>Số lượng</th>
            <th>Màu</th>
            <th>Size</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
          </tr>
        </thead>
        <tbody>';

        foreach ($getProductDriving as $key => $value) {
          extract($value) ;
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
            Đang giao
          </td>
        </tr>
          ';
    }
        echo '</tbody>
        </table> </div>';
        echo ' <div style="margin-top: 1rem ;margin-bottom: 2rem; width: 100%; text-align: center;">
        <button style="width: 185px" class="btn btn-primary"><a style="color: white;" href="index.php?act=xacNhanGiaoThanhCong&id='.$id_donHang.'">Giao thành công</a></button>
        </div>';
  
        
      }
       
      ?>
    

</div>
