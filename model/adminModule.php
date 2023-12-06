<?php 

//  Danh mục
    function themDanhMuc($name){
        $sql = "insert into danh_muc(name) values('$name')";
        pdo_execute($sql);
    };

    function layDanhSachDanhMuc(){
        $sql = "select * from danh_muc";
        return pdo_query($sql);
    };
    function checkDanhMuc($id){
        $sql = "select * from san_pham where id_danhMuc = '$id' ";
        return pdo_query($sql);
    };

    function xoaDanhMuc($id) {
        $sql = "delete from danh_muc where id = ".$id ;
        pdo_query($sql);
    };

    // Sản phẩm 

    function themSanPham($name , $price , $image0 , $image1 , $image2 , $description , $origin , $fabric , $brand , $id_danhMuc ){
        $sql = "insert into san_pham(name , price , image0 , image1 , image2 , description , origin , fabric , brand , id_danhMuc) 
        values ('$name' , '$price' , '$image0' , '$image1' , '$image2' ,'$description' , '$origin' , '$fabric', '$brand', '$id_danhMuc')
        ";
        pdo_execute($sql);
       
    };

    function checkName($name){
        $sql = "select * from san_pham where san_pham.name = '$name'";
        return pdo_query($sql);
    }

    function layDanhSachSanPham(){
        $sql = "select san_pham.* , danh_muc.name as name_danh_muc from san_pham INNER JOIN danh_muc ON san_pham.id_danhMuc = danh_muc.id" ;
        return pdo_query($sql);
    }
    function checkSanPham($id){
        $sql = "select * from chi_tiet_san_pham where id_sanPham = '$id'" ;
        return pdo_query($sql);
    }
    function xoaSanPham($id){
        $sql = "delete from san_pham where id = '$id'";
        $sql2 = "delete from comments where id_sanPham = '$id'";
        pdo_execute($sql);
        pdo_execute($sql2);
    }
    function layMotSanPham($id){
        $sql = "select * from san_pham where id= '$id'";
        return  pdo_query_one($sql);
    }
    function capNhatSanPham($id , $name , $price , $image0 , $image1 , $image2 , $description , $origin , $fabric , $brand , $id_danhMuc){
            $sql = " update san_pham set name='".$name."' , price='".$price."' , image0='".$image0."' , image1='".$image1."' , image2='".$image2."' , description='".$description."' , origin='".$origin."' , fabric='".$fabric."' , brand='".$brand."' , id_danhMuc='".$id_danhMuc."' where id=".$id;
            pdo_execute($sql);
    }
    // Số lượng 
    function themSoLuong($id_sanPham , $size , $color , $quatity){
        $sql = "insert into chi_tiet_san_pham(id_sanPham , color , size , quatity ) values('$id_sanPham' , '$color' , '$size' , '$quatity')";
        pdo_execute($sql);
    };
    function checkChiTietSanPham($id_sanPham , $size , $color){
        $sql = "select * from chi_tiet_san_pham where id_sanPham = '$id_sanPham' and color = '$color' and size = '$size'";
        return pdo_query($sql);
    };
    function updateChiTietSanPham($id_sanPham , $size , $color , $quatity){
        $sql = "update chi_tiet_san_pham set quatity = quatity + '$quatity' where id_sanPham = '$id_sanPham' and color = '$color' and size = '$size'";
        pdo_execute($sql);
    };
    function listQuatity(){
        $sql = "select san_pham.image0 as image ,chi_tiet_san_pham.id as id , san_pham.name as name , size , color , chi_tiet_san_pham.quatity as total from san_pham INNER JOIN chi_tiet_san_pham ON chi_tiet_san_pham.id_sanPham = san_pham.id GROUP BY chi_tiet_san_pham.id_sanPham , chi_tiet_san_pham.size , chi_tiet_san_pham.color";
        return pdo_query($sql);
    };
    function xoaChiTietSanPham($id){
        $sql = "delete from chi_tiet_san_pham where id = '$id'";
        pdo_execute($sql);
    }
   
    // quản lí đơn hàng 
    function getAllBill(){
        $sql = "select don_hang.* , users.name as name from don_hang INNER jOIN users ON don_hang.id_user = users.id where don_hang.trang_thai='dang_cho'";
        return pdo_query($sql);
    }
    function getAllBillCanceled(){
        $sql = "select don_hang.* , users.email as email from don_hang INNER jOIN users ON don_hang.id_user = users.id where don_hang.trang_thai !='dang_cho' and don_hang.trang_thai !='dang_giao' and don_hang.trang_thai !='da_giao' ";
        return pdo_query($sql);
    }
    function layTatCaDon(){
        // $sql = "select don_hang.* , users.email as email from users INNER JOIN don_hang ON don_hang.id_user = users.id
        // INNER JOIN chi_tiet_don_hang.id_don_hang = don_hang.id
        // ";
        $sql = "
        SELECT
  don_hang.*,
  users.email as email,
  COUNT(*) AS so_luong_chi_tiet_don_hang
FROM users INNER JOIN don_hang ON don_hang.id_user = users.id
INNER JOIN chi_tiet_don_hang
ON don_hang.id = chi_tiet_don_hang.id_don_hang 

GROUP BY don_hang.id
ORDER BY don_hang.timestamp DESC ;
        ";
        return pdo_query($sql);
    }
    function danhSachSanPham($id){
        $sql = "select chi_tiet_don_hang.*, san_pham.image0 as img , san_pham.name as name , users.email as email from san_pham INNER JOIN chi_tiet_don_hang ON chi_tiet_don_hang.id_CTSP = san_pham.id INNER JOIN users ON chi_tiet_don_hang.id_user = users.id where chi_tiet_don_hang.id_don_hang = '$id'";
        return pdo_query($sql);
    }
    function getListCanceled($id_donHang){
        $sql = "select chi_tiet_don_hang.*, san_pham.image0 as img , san_pham.name as name from chi_tiet_don_hang INNER JOIN san_pham ON chi_tiet_don_hang.id_CTSP = san_pham.id where chi_tiet_don_hang.id_don_hang='$id_donHang'";
        return pdo_query($sql);
    };
    function getBillDrivering(){
        $sql = "select don_hang.* , users.name as name from don_hang INNER jOIN users ON don_hang.id_user = users.id where don_hang.trang_thai ='dang_giao'";
        return pdo_query($sql);
    }
    function getProductDriving($id_donHang){
        $sql = "select chi_tiet_don_hang.*, san_pham.image0 as img , san_pham.name as name from san_pham INNER JOIN chi_tiet_don_hang ON chi_tiet_don_hang.id_CTSP = san_pham.id where chi_tiet_don_hang.id_don_hang='$id_donHang'";
        return pdo_query($sql);
    };
    function xacNhanDonHang($id){
        $sql = "update don_hang set trang_thai='dang_giao' where id = '$id'";
        pdo_execute($sql);
    };
    function xoaDonHang($id){
        $sql = "update don_hang set trang_thai='huy_don_hang_admin' where id = '$id'";
        pdo_execute($sql);
    }
    function xacNhanGiaoThanhCong($id){
        $sql = "update chi_tiet_don_hang set trang_thai='da_giao' , timestamp = CURRENT_TIMESTAMP() where id_don_hang = '$id'";
        $sql2 = "update don_hang set trang_thai='da_giao' , timestamp = CURRENT_TIMESTAMP() where id = '$id'";
        pdo_execute($sql);
        pdo_execute($sql2);
    }
    // Lấy bình luận 
    function getComments(){
        $sql = "select users.name as nameUser , comments.comment as comment , san_pham.image0 as image , san_pham.name as nameSanPham , comments.timestamp as timestamp ,comments.id as id from 
         users INNER JOIN comments ON users.id = comments.id_user INNER JOIN san_pham ON comments.id_sanPham = san_pham.id
        ";
        return pdo_query($sql);
    };
    function xoaBinhLuan($id){
        $sql = "delete from comments where id = '$id'";
        pdo_execute($sql);
    }
    // Lấy người dùng
    function getUsers($id){
        $sql = "select * from users where id != '$id'";
        return pdo_query($sql);
    }
    function xoaNguoiDung($id_user){
        $sql = "delete from users where id = '$id_user'";
        pdo_execute($sql);
    }

    // Doanh số 
    function getDoanhSo(){
        $sql = "select DATE(timestamp) as date , SUM(total_money) AS doanhSo from chi_tiet_don_hang where trang_thai = 'da_giao' and
        YEAR(timestamp) = YEAR(CURRENT_TIMESTAMP()) GROUP BY MONTH(timestamp) order by MONTH(timestamp) ";
        return pdo_query($sql);
    }
    function getDoanhSoTheoNgay($start_date , $end_date){
        $sql = "select DATE(timestamp) as date , SUM(total_money) AS doanhSo from chi_tiet_don_hang where trang_thai = 'da_giao' and
        timestamp BETWEEN '$start_date' AND '$end_date' GROUP BY MONTH(timestamp) order by MONTH(timestamp) ";
        return pdo_query($sql);
    }
    function donHangGiao(){
        $sql = "select COUNT(*) as quantity from don_hang where trang_thai = 'da_giao' ";
        return pdo_query_one($sql);
    }
    function donHangGiaoTheoNgay($start_date , $end_date){
        $sql = "select COUNT(*) as quantity from don_hang where trang_thai = 'da_giao' and
        timestamp BETWEEN '$start_date' AND '$end_date' ";
        return pdo_query_one($sql);
    }
    function donHangHuy(){
        $sql = "select COUNT(*) as quantity from don_hang where trang_thai = 'huy_don_hang_admin' OR  trang_thai = 'huy_don_hang_user' ";
        return pdo_query_one($sql);
    }
    function donHangHuyTheoNgay($start_date , $end_date){
        $sql = "select COUNT(*) as quantity from don_hang where trang_thai = 'huy_don_hang_admin' OR  trang_thai = 'huy_don_hang_user' and
        timestamp BETWEEN '$start_date' AND '$end_date'";
        return pdo_query_one($sql);
    }
    function binhLuan(){
        $sql = "select COUNT(*) as quantity from comments";
        return pdo_query_one($sql);
    }
    function binhLuanTheoNgay($start_date , $end_date){
        $sql = "select COUNT(*) as quantity from comments where
        timestamp BETWEEN '$start_date' AND '$end_date'";
        return pdo_query_one($sql);
    }
    function doanhSo(){
        $sql = "select SUM(total_money) as quantity from chi_tiet_don_hang where trang_thai ='da_giao' ";
        return pdo_query_one($sql);
    }
    function doanhSoTheoNgay($start_date , $end_date){
        $sql = "select SUM(total_money) as quantity from chi_tiet_don_hang where trang_thai ='da_giao' and
        timestamp BETWEEN '$start_date' AND '$end_date'";
        return pdo_query_one($sql);
    }

    function top5SanPhamBanChay(){
        $sql = "select san_pham.* , SUM(quatity) AS quantity_sold , danh_muc.name as namDanhMuc FROM chi_tiet_don_hang INNER JOIN san_pham ON chi_tiet_don_hang.id_CTSP = san_pham.id INNER JOIN danh_muc ON danh_muc.id = san_pham.id_danhMuc where chi_tiet_don_hang.trang_thai = 'da_giao' GROUP BY id_CTSP ORDER BY quantity_sold DESC LIMIT 5;";
        return pdo_query($sql);
    }
    
?>