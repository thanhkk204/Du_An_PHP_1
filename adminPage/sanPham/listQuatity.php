
<div class="admin_right-bottom">
         <!-- <div class="narbar_danhMuc">
                <a href="index.php?act=themSanPham">Thêm sản phẩm</a>
                <a href="index.php?act=layDanhSachSanPham">Danh sách</a>
                <a href="index.php?act=themSoLuongSanPham">Thêm số lượng</a>
                <a href="index.php?act=laySoLuongSanPham">Danh sách số lượng</a>
        </div> -->

        <nav class="narbar_danhMuc">
      <ul>
      <li><a href="index.php?act=themSanPham">Thêm sản phẩm</a></li>
      <li><a href="index.php?act=layDanhSachSanPham">Danh sách</a></li>
      <li><a href="index.php?act=themSoLuongSanPham">Thêm số lượng</a></li>
      <li><a href="index.php?act=laySoLuongSanPham">Danh sách số lượng</a></li>
      </ul>
      </nav>
      
        

        

<table class="table_listQuatity">
    <thead>
      <tr>
        <th>Tên</th>
        <th>Ảnh</th>
        <th>Kích cỡ</th>
        <th>Màu</th>
        <th>Số lượng</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody >

        <?php 
        
        foreach ($listQuatity as $key => $value) {
          $xoaChiTietSanPham = ' <button onclick="confirmDeleteDetal('.$value['id'].')">Xóa</button>';
                echo '
                <tr>
                <td>'.$value['name'].'</td>
                <td><img src="../upload/'.$value['image'].'" alt="" class="img-product"></td>
                <td>'.$value['size'].'</td>
                <td>'.$value['color'].'</td>
                <td>'.$value['total'].'</td>
                <td>'.$xoaChiTietSanPham.'</td>
                </tr>
                ';
        }
        ?>
    
    </tbody>
  </table>
       
</div>