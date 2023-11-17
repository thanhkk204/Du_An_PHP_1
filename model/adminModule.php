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
        $sql = "select * from san_pham";
        return pdo_query($sql);
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
    function layDanhSachDonHangDangGiao(){
        $sql = "select chi_tiet_don_hang.*, san_pham.image0 as img , san_pham.name as name from chi_tiet_don_hang INNER JOIN san_pham ON chi_tiet_don_hang.id_CTSP = san_pham.id where chi_tiet_don_hang.trang_thai='dang_giao'";
        return pdo_query($sql);
    };
    function xacNhanDonHang($id){
        $sql = "update chi_tiet_don_hang set trang_thai='dang_giao' where id = '$id'";
        pdo_execute($sql);
    };
?>