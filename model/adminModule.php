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

    function layDanhSachSanPham(){
        $sql = "select san_pham.* , danh_muc.name as name_danh_muc from san_pham INNER JOIN danh_muc ON san_pham.id_danhMuc = danh_muc.id" ;
        return pdo_query($sql);
    }
    function xoaSanPham($id){
        $sql = "delete from san_pham where id = '$id'";
        pdo_execute($sql);
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
    function listQuatity(){
        $sql = "select san_pham.image0 as image ,chi_tiet_san_pham.id as id , san_pham.name as name , size , color , chi_tiet_san_pham.quatity as total from san_pham INNER JOIN chi_tiet_san_pham ON chi_tiet_san_pham.id_sanPham = san_pham.id GROUP BY chi_tiet_san_pham.id_sanPham , chi_tiet_san_pham.size , chi_tiet_san_pham.color";
        return pdo_query($sql);
    };
    function xoaChiTietSanPham($id){
        $sql = "delete from chi_tiet_san_pham where id = '$id'";
        pdo_execute($sql);
    }
   
    // quản lí đơn hàng 
    function layDanhSachDonHang(){
        $sql = "select chi_tiet_don_hang.*, san_pham.image0 as img , san_pham.name as name from chi_tiet_don_hang INNER JOIN san_pham ON chi_tiet_don_hang.id_CTSP = san_pham.id where chi_tiet_don_hang.trang_thai='dang_cho'";
        return pdo_query($sql);
    };
    function layDanhSachDonHangDaHuy(){
        $sql = "select chi_tiet_don_hang.*, san_pham.image0 as img , san_pham.name as name from chi_tiet_don_hang INNER JOIN san_pham ON chi_tiet_don_hang.id_CTSP = san_pham.id where chi_tiet_don_hang.trang_thai !='dang_cho' and chi_tiet_don_hang.trang_thai !='dang_giao'";
        return pdo_query($sql);
    };
    function layDanhSachDonHangDangGiao(){
        $sql = "select chi_tiet_don_hang.*, san_pham.image0 as img , san_pham.name as name from chi_tiet_don_hang INNER JOIN san_pham ON chi_tiet_don_hang.id_CTSP = san_pham.id where chi_tiet_don_hang.trang_thai='dang_giao'";
        return pdo_query($sql);
    };
    function xacNhanDonHang($id){
        $sql = "update chi_tiet_don_hang set trang_thai='dang_giao' where id = '$id'";
        pdo_execute($sql);
    };
    function xoaDonHang($id){
        $sql = "update chi_tiet_don_hang set trang_thai='huy_don_hang_admin' where id = '$id'";
        pdo_execute($sql);
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
?>