<?php
    function getProductSection(){
            $sql = "select * from san_pham limit 4";
            return pdo_query($sql);
    }
    function getProductSectionFull(){
       $sql = "select * from san_pham";
       return pdo_query($sql);
}
    function register($name , $email , $phone , $address , $password ){
            $sql = "insert into users(name , email , phone , address , password ) 
            values ('$name' , '$email' , '$phone' , '$address' , '$password' )
            ";
            pdo_execute($sql);
    }
    function logIn( $email , $password ){
            $sql = "select * from users where email= '".$email."' and password= '".$password."'";
            return pdo_query_one($sql);
    }
    function xemDonHang($id_user){
        //    $sql = "select * from chi_tiet_don_hang where chi_tiet_don_hang.id_user='$id_user'";
           $sql = "select chi_tiet_don_hang.*, san_pham.image0 as img , san_pham.name as name from chi_tiet_don_hang INNER JOIN san_pham ON chi_tiet_don_hang.id_CTSP = san_pham.id  where chi_tiet_don_hang.id_user='$id_user' and chi_tiet_don_hang.trang_thai != 'huy_don_hang_user' and chi_tiet_don_hang.trang_thai != 'huy_don_hang_admin'";
           return pdo_query($sql);
    }
    function xemDonHangDaHuy($id_user){
        //    $sql = "select * from chi_tiet_don_hang where chi_tiet_don_hang.id_user='$id_user'";
           $sql = "select chi_tiet_don_hang.*, san_pham.image0 as img , san_pham.name as name from chi_tiet_don_hang INNER JOIN san_pham ON chi_tiet_don_hang.id_CTSP = san_pham.id  where chi_tiet_don_hang.id_user='$id_user' and chi_tiet_don_hang.trang_thai != 'dang_cho' and chi_tiet_don_hang.trang_thai != 'dang_giao'";
           return pdo_query($sql);
    }

    function xoaDonHangClient($id){
        $sql = "update chi_tiet_don_hang set trang_thai='huy_don_hang_user' where id = '$id'";
        pdo_execute($sql);
    }

    function getCoLor(){
           $sql = "select DISTINCT chi_tiet_san_pham.color from chi_tiet_san_pham order by color" ;
           return pdo_query($sql);
    }
    function getSize(){
           $sql = "select DISTINCT chi_tiet_san_pham.size from chi_tiet_san_pham order by size" ;
           return pdo_query($sql);
    }
    function getDanhMuc(){
           $sql = "select DISTINCT name , id from danh_muc " ;
           return pdo_query($sql);
    }

//     Trang tìm kiếm
     function getItemsFolder($id){
       $sql = "select * from san_pham where id_danhMuc = '$id'" ;
       return pdo_query($sql);
}
     function getItemsgetItemsColor($name){
       $sql = "select DISTINCT san_pham.* from san_pham INNER JOIN chi_tiet_san_pham ON san_pham.id = chi_tiet_san_pham.id_sanPham where chi_tiet_san_pham.color = '$name'" ;
       return pdo_query($sql);
}
     function getItemsgetItemsSize($size){
       $sql = "select DISTINCT san_pham.* from san_pham INNER JOIN chi_tiet_san_pham ON san_pham.id = chi_tiet_san_pham.id_sanPham where chi_tiet_san_pham.size = '$size'" ;
       return pdo_query($sql);
}
     function getItemsgetItemsName($name){
       $sql = 'select san_pham.* from san_pham where san_pham.name like "%'.$name.'%"' ;
       return pdo_query($sql);
}
?>