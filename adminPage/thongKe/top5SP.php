<div class="admin_right-bottom">
    <nav class="narbar_danhMuc">
      <ul>
      <li><a href="index.php?act=getThongKe">Thống kê</a></li>
      <li> <a href="index.php?act=top5SanPhamBanChay">Top 5 sản phẩm bán chạy</a></li>
      </ul>
      </nav>

      <table  class="table_2">
          <tr>
            <th>Name</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th>Mô Tả</th>
            <th>Xuất Xứ</th>
            <th>Chất liệu</th>
            <th>Thương hiệu</th>
            <th>Danh mục</th>
            <th>Số lượt bán</th>
            
          </tr>
          <?php 
           foreach ($top5SanPhamBanChay as $key => $value) {
            // extract($value);
            $suaSanPham = 'index.php?act=suaSanPham&id='.$value['id'];
            $xoaSanPham= ' <button onclick="confirmDelete('.$value['id'].')">Xóa</button>';
            $path = '../upload/';
            if($value['image0']){
              $img_dir = $path . $value['image0'];
             $show_img  = '<img src="'.$img_dir.'" alt="" width="50px">';
            }else{
              $show_img = 'No photo';
            }
            $price = number_format($value['price'], 0, ",", ".");
           echo ' <tr>
           <td>'.$value['name'].'</td>
           <td>'.$price.'</td>
           <td>'.$show_img.'</td>
           <td class="description">'.$value['description'].'</td>
           <td>'.$value['origin'].'</td>
           <td>'.$value['fabric'].'</td>
           <td>'.$value['brand'].'</td>
           <td>'.$value['namDanhMuc'].'</td>
           <td >'
           .$value['quantity_sold'].
           '</td>
           </tr>';
             }
          ?>
        </table>
</div>

