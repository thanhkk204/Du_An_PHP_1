<?php
    function getProductSection(){
            $sql = "select * from san_pham limit 8";
            return pdo_query($sql);
    }
    function getProductSectionFull(){
       $sql = "select * from san_pham limit 12";
       return pdo_query($sql);
}
    function getProductViews(){
       $sql = "SELECT * FROM san_pham ORDER BY views DESC LIMIT 8";
       return pdo_query($sql);
}
    function register($name , $email , $phone , $address , $password ){
            $sql = "insert into users(name , email , phone , address , password ) 
            values ('$name' , '$email' , '$phone' , '$address' , '$password' )
            ";
            pdo_execute($sql);
    }
     function checkRegister( $email){
            $sql = "select * from users where email= '".$email."'";
            return pdo_query($sql);
    }
    function logIn( $email , $password ){
            $sql = "select * from users where email= '".$email."' and password= '".$password."'";
            return pdo_query_one($sql);
    }
    function xemDonHang($id_user){
       $get_doHang = "select * from don_hang where id_user = '$id_user' and don_hang.trang_thai != 'huy_don_hang_user' and don_hang.trang_thai != 'huy_don_hang_admin' ORDER BY timestamp DESC" ;
            return pdo_query($get_doHang);
    }
    function chiTietDonHang($id_donHang){
              $sql = "select chi_tiet_don_hang.* from chi_tiet_don_hang where chi_tiet_don_hang.id_don_hang ='$id_donHang'";
            return pdo_query($sql);
    }
    function donHang($id_donHang){
              $sql = "select don_hang.* from don_hang where don_hang.id ='$id_donHang'";
            return pdo_query_one($sql);
    }
    function getImgDonHang($id){
             $sql3 = "select image0 from san_pham where san_pham.id ='$id'";
             return pdo_query_one($sql3);
    }
    function getChi_tiet_don_($id_donHang){
           $sql = "select chi_tiet_don_hang.*, san_pham.image0 as img , san_pham.name as name from chi_tiet_don_hang INNER JOIN san_pham ON chi_tiet_don_hang.id_CTSP = san_pham.id  where chi_tiet_don_hang.id_don_hang='$id_donHang'";
           return pdo_query($sql);
    }
    function xemDonHangDaHuy($id_user){
           $sql = "select don_hang.* from don_hang where don_hang.id_user='$id_user' and trang_thai !='dang_giao' and trang_thai !='dang_cho' and trang_thai !='da_giao' ";
           return pdo_query($sql);
    }
    function getDonHangDaHuy($id_donHang){
           $sql = "select * from chi_tiet_don_hang where id_don_hang = '$id_donHang'";
           return pdo_query($sql);
    }
    function getDonHangDaHuyImg($id_sanPham){
           $sql = "select image0 from san_pham where id = '$id_sanPham'";
           return pdo_query_one($sql);
    }


    function xoaDonHangClient($id){
        $sql = "delete from chi_tiet_don_hang where id = '$id'";
        pdo_execute($sql);
    }
    function xoaDonHangAll($id){
        $sql = "delete from don_hang where id = '$id'";
        pdo_execute($sql);
    }
    function huyDonHangAll($id){
        $sql = "update don_hang set don_hang.trang_thai='huy_don_hang_user' where id = '$id'";
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
       $sql = "select san_pham.* from san_pham INNER JOIN chi_tiet_san_pham ON san_pham.id = chi_tiet_san_pham.id_sanPham where chi_tiet_san_pham.color = '$name'" ;
       return pdo_query($sql);
}
     function getItemsgetItemsSize($size){
       $sql = "select san_pham.* from san_pham INNER JOIN chi_tiet_san_pham ON san_pham.id = chi_tiet_san_pham.id_sanPham where chi_tiet_san_pham.size = '$size'" ;
       return pdo_query($sql);
}
     function getItemsPrice($loaiGia){
       if ($loaiGia == 1) {
              $sql = "select san_pham.* from san_pham where san_pham.price <= 200000";
       }else if($loaiGia == 2) {
              $sql = "select san_pham.* from san_pham where san_pham.price > 200000 and san_pham.price <= 400000";
       }
       else if($loaiGia == 3) {
              $sql = "select san_pham.* from san_pham where san_pham.price > 400000 and san_pham.price <= 500000";
       }
       else if($loaiGia == 4) {
              $sql = "select san_pham.* from san_pham where san_pham.price >= 500000 ";
       }
       return pdo_query($sql);
}
     function getItemsgetItemsName($name){
       $sql = 'select san_pham.* from san_pham where san_pham.name like "%'.$name.'%"' ;
       return pdo_query($sql);
}
?>