<?php 

     function themHoaDon($id_user, $name , $phone_number , $address , $payment_method , $shipping_method , $note ){
        $sql = "insert into don_hang(id_user , name , phone_number , address , phuong_thuc_thanh_toan , phuong_thuc_van_chuyen , notice ) 
        values ('$id_user' , '$name' , '$phone_number' , '$address' , '$payment_method' , '$shipping_method' ,'$note' )
        ";

        pdo_execute($sql);
       
    };
     function themChiTietHoaDon($id_don_hang , $id_CTSP , $id_user , $quatity  , $color , $size , $totalMoney ){
        $sql = "insert into chi_tiet_don_hang(id_don_hang , id_CTSP , id_user , quatity , color , size , total_money ) 
        values ('$id_don_hang' , '$id_CTSP' , '$id_user' , '$quatity' , '$color' , '$size' ,'$totalMoney' )
        ";
        pdo_execute($sql);
       
    };
    function getLetestId(){
        $sql = "select max(id) from don_hang" ;
        return pdo_query_value($sql);
    }

    function capNhatSoLuongSanPham($id , $quatity){
        $sql = "update chi_tiet_san_pham set quatity= quatity - '$quatity' where id = '$id'";
        pdo_execute($sql);
    };
?>