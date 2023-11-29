<?php 
session_start();
include('../model/pdo.php');
include('../model/adminModule.php');

include('./header.php');
if(isset($_GET['act'])){
    $act = $_GET['act'];

    switch ($act) {
        // Thêm danh mục
        case 'themDanhMuc':
        include('./danhMuc/addDanhMuc.php');
        break;
        // Thêm danh mục
        case 'excuteAddDM':
       if(isset($_POST['submit']) && isset($_POST['name'])){

        themDanhMuc($_POST['name']) ;
        $message = ' Bạn đã thêm thành công';
        include('./danhMuc/addDanhMuc.php');
       }
        break;
        // Lấy danh sách danh mục
        case 'layDanhSachDanhMuc':
            $danhSachDanhMuc = layDanhSachDanhMuc();
      
        include('./danhMuc/list.php');
        break;
        // Mặc định
        // Xóa Danh mục
        case 'xoaDanhMuc':
            if(isset($_GET['id'])){
                xoaDanhMuc($_GET['id']);
                $danhSachDanhMuc = layDanhSachDanhMuc();
                include('./danhMuc/list.php');
            }
      
        break;

            // Thêm sản phẩm 
         case 'themSanPham':
            $listDanhMuc = layDanhSachDanhMuc();
             include('./sanPham/add.php');
             break;
         // Thêm sản phẩm 
         case 'excuteAddSP':
            $listDanhMuc = layDanhSachDanhMuc();
            if(isset($_POST['submit']) ){
                $imageCount = count($_FILES['image']['name']);
                if ($imageCount > 3) {
                    $err = 'Bạn chỉ được chọn 3 ảnh';
                    include('./sanPham/add.php');
                }else{
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $origin = $_POST['origin'];
                    $fabric = $_POST['fabric'];
                    $brand = $_POST['brand'];
                    $id_danhMuc = $_POST['id_danhMuc'];

                    $image0 = $_FILES['image']['name'][0];
                    $image1 = $_FILES['image']['name'][1];
                    $image2 = $_FILES['image']['name'][2];
    
                    $target_dir = '../upload/';
    
                    for ($i=0; $i < $imageCount ; $i++) { 
                        $target_file = $target_dir . basename($_FILES['image']['name'][$i]);
                        move_uploaded_file($_FILES['image']['tmp_name'][$i] , $target_file);
                    }
                    themSanPham($name , $price , $image0 , $image1 , $image2 , $description , $origin , $fabric , $brand , $id_danhMuc);
                    $message = ' Bạn đã thêm sản phẩm thành công';
                    include('./sanPham/add.php');
                }
            }
             break;
             // Lấy danh sách sản phẩm 
             case 'layDanhSachSanPham':
                $danhSachSanPham = layDanhSachSanPham();
                 include('./sanPham/list.php');
                 break;

             // Thêm số lượng sản phẩm     
             case 'themSoLuongSanPham':
                $danhSachSanPham = layDanhSachSanPham();
                include('./sanPham/addQuatity.php');
                break;
             // Thêm số lượng sản phẩm     
             case 'excuteAddQuatity':
                if(isset($_POST['submit'])){
                    $id_sanPham = $_POST['id_sanPham'];
                    $quatity = $_POST['quatity'];
                    $size = $_POST['size'];
                    $color = $_POST['color'];

                    themSoLuong($id_sanPham , $size , $color , $quatity);

                    $message = "Bạn đã thêm số lượng thành công";
                }
                $danhSachSanPham = layDanhSachSanPham();
                include('./sanPham/addQuatity.php');
                break;
             // Lấy số lượng sản phẩm      
             case 'laySoLuongSanPham':

                $listQuatity = listQuatity();
                include('./sanPham/listQuatity.php');
                break;
             // Xóa chi tiết sản phẩm      
             case 'xoaChiTietSanPham':
                $id =  $_GET['id'];
                xoaChiTietSanPham($id);
                $listQuatity = listQuatity();
                include('./sanPham/listQuatity.php');
                break;
             // Xóa sản phẩm      
             case 'xoaSanPham':
                $id =  $_GET['id'];
                xoaSanPham($id);
                $danhSachSanPham = layDanhSachSanPham();
                 include('./sanPham/list.php');
                 break;
            // Sửa sản phẩm 
             case 'suaSanPham':
                 $id =  $_GET['id'];

                $layMotSanPham = layMotSanPham($id);
                $listDanhMuc = layDanhSachDanhMuc();
                 include('./sanPham/update.php');
                 break;
            // Sửa sản phẩm excute
             case 'suaSanPhamExcute':
                 $id = $_GET['id'];
                 if(isset($_POST['submit']) ){
                    $imageCount = count($_FILES['image']['name']);
                    if ($imageCount > 3) {
                        $err = 'Bạn chỉ được chọn 3 ảnh';
                        include('./sanPham/update.php');
                    }else{
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $description = $_POST['description'];
                        $origin = $_POST['origin'];
                        $fabric = $_POST['fabric'];
                        $brand = $_POST['brand'];
                        $id_danhMuc = $_POST['id_danhMuc'];
    
                        $image0 = $_FILES['image']['name'][0];
                        $image1 = $_FILES['image']['name'][1];
                        $image2 = $_FILES['image']['name'][2];
        
                        $target_dir = '../upload/';
        
                        for ($i=0; $i < $imageCount ; $i++) { 
                            $target_file = $target_dir . basename($_FILES['image']['name'][$i]);
                            move_uploaded_file($_FILES['image']['tmp_name'][$i] , $target_file);
                        }
                        capNhatSanPham($id , $name , $price , $image0 , $image1 , $image2 , $description , $origin , $fabric , $brand , $id_danhMuc);
                        $message = ' Bạn đã thêm sản phẩm thành công';
                        $danhSachSanPham = layDanhSachSanPham();
                        include('./sanPham/list.php');
                    }
                }
                 break;

             // Quản lí đơn hàng    
             case 'hienThiDonHang':
                $danhSachDonHang = layDanhSachDonHang();
                include('./quanLiDonHang/list.php');
                break;
             // Quản lí đơn hàng  Đã hủy  
             case 'hienThiDonHangDaHuy':
                $danhSachDonHang = layDanhSachDonHangDaHuy();
                include('./quanLiDonHang/listCanceled.php');
                break;

             case 'donHangDangGiao':
                $danhSachDonHang = layDanhSachDonHangDangGiao();
                include('./donHangDaGiao/list.php');
                break;
                // Xác nhận đơn hàng
             case 'xacNhanDonHang':
                    $id = $_GET['id'];
                    xacNhanDonHang($id);
                    $danhSachDonHang = layDanhSachDonHang();
                    include('./quanLiDonHang/list.php');

                break;
                // Hủy đơn hàng
             case 'xoaNhanDonHang':
                    $id = $_GET['id'];
                    xoaDonHang($id);
                    $message = "Bạn đã hủy đơn hàng thành công";
                    $danhSachDonHang = layDanhSachDonHang();
                    include('./quanLiDonHang/list.php');

                break;
                // Quản lí bình luận
             case 'quanLiBinhLuan':
                    $getComments = getComments();
                    include('./quanLiBinhLuan/list.php');

                break;
                // Xóa bình luận
             case 'xoaComment':
                $id = $_GET['id'];
                xoaBinhLuan($id);
                $getComments = getComments();
                include('./quanLiBinhLuan/list.php');

                break;
                // Quản lí người dùng
             case 'quanLiNguoiDung':
                $id = $_SESSION['user']['id'];
                $getUsers = getUsers($id);
                include('./quanLiNguoiDung/list.php');

                break;
                // Xóa người dùng
             case 'xoaNguoiDung':
                $id_user = $_GET['id'];
                xoaNguoiDung($id_user);
                
                $id = $_SESSION['user']['id'];
                $getUsers = getUsers($id);
                include('./quanLiNguoiDung/list.php');

                

                break;
        // Mặc định
        default:
        include('./body.php');
        break;
    }

}else{
    include('./body.php');
}
include('./footer.php')
?>