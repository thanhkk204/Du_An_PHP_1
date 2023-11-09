<?php 
 function getProductById($id) {
    $sql = "select * from san_pham where id = '$id'";
    return pdo_query_one($sql);
};

function getDetailProduct($id){
    $sql = "select id_sanPham , size , color , SUM(quatity) as total from san_pham INNER JOIN chi_tiet_san_pham ON chi_tiet_san_pham.id_sanPham = san_pham.id WHERE chi_tiet_san_pham.id_sanPham = '$id' GROUP BY chi_tiet_san_pham.id_sanPham , chi_tiet_san_pham.size , chi_tiet_san_pham.color";
    return pdo_query($sql);
};
function getDetailProductbyColor($id){
    $sql = "select id_sanPham , color , SUM(quatity) as total from san_pham INNER JOIN chi_tiet_san_pham ON chi_tiet_san_pham.id_sanPham = san_pham.id WHERE chi_tiet_san_pham.id_sanPham = '$id' GROUP BY chi_tiet_san_pham.id_sanPham , chi_tiet_san_pham.color";
    return pdo_query($sql); 
};

function getDetailProductbySize($id){
    $sql = "select size , SUM(quatity) as total from san_pham INNER JOIN chi_tiet_san_pham ON chi_tiet_san_pham.id_sanPham = san_pham.id WHERE chi_tiet_san_pham.id_sanPham = '$id' GROUP BY chi_tiet_san_pham.id_sanPham , chi_tiet_san_pham.size ";
    return pdo_query($sql);
};

function getQuitityOfColor($id , $colorLencode){
    $color = urldecode($colorLencode);
    $sql = "select size , SUM(quatity) as total from san_pham INNER JOIN chi_tiet_san_pham ON chi_tiet_san_pham.id_sanPham = san_pham.id WHERE chi_tiet_san_pham.id_sanPham = '$id' AND chi_tiet_san_pham.color = '$color' GROUP BY chi_tiet_san_pham.id_sanPham , chi_tiet_san_pham.size";
    return pdo_query($sql);
};
?>