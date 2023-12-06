
<div class="admin_right-bottom">
        

<nav class="narbar_danhMuc">
          <ul>
          <li><a href="index.php?act=hienThiDonHang">Xác Nhận Đơn</a></li>
          <li><a href="index.php?act=hienThiDonHangDaHuy">Danh sách Đã Hủy</a></li>
          <li><a href="index.php?act=tatCaDonHang">Tất cả đơn hàng</a></li>
          </ul>
    </nav>
      
        

        

<table class="table_listQuatity">
    <thead>
      <tr>
        <th>ID Đơn Hàng</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Số lượng sản phẩm mua</th>
        <th>Trạng thái</th>
        <th>Chức Năng</th>
      </tr>
    </thead>
    <tbody >

        <?php 
        
        foreach ($layTatCaDon as $key => $value) {
          $xoaChiTietSanPham = ' <button onclick="confirmDeleteDetal('.$value['id'].')">Xóa</button>';
          $xemChiTietSanPham = ' <button onclick="xemChiTietDonHang('.$value['id'].')">Chi Tiết</button>';
          $trangThai = '';
          if ($value['trang_thai'] == 'dang_cho') {
            $trangThai = 'Chờ xuất kho';
          }else if($value['trang_thai'] == 'da_giao') {
            $trangThai = 'Giao thành công';
          }else if($value['trang_thai'] == 'dang_giao') {
            $trangThai = 'Đang giao';
          }else if($value['trang_thai'] == 'huy_don_hang_admin') {
            $trangThai = 'Admin hủy ';
          }else if($value['trang_thai'] == 'huy_don_hang_user') {
            $trangThai = 'User hủy đơn';
          }
                echo '
                <tr>
                <td>'.$value['id'].'</td>
                <td>'.$value['phone_number'].'</td>
                <td>'.$value['email'].'</td>
                <td>'.$value['so_luong_chi_tiet_don_hang'].'</td>
                <td>'.$trangThai.'</td>
                <td>'.$xemChiTietSanPham.'</td>
                </tr>
                ';
        }
        ?>
    
    </tbody>
  </table>
</div>