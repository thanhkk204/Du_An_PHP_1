<?php 
 function getProductById($id) {
    $sql = "select * from san_pham where id = '$id'";
    return pdo_query_one($sql);
};

function getDetailProduct($id){
    $sql = "select chi_tiet_san_pham.id as id , id_sanPham , san_pham.price as price , san_pham.brand as brand , san_pham.name as name , san_pham.image0 as img , size , color , SUM(quatity) as total from san_pham INNER JOIN chi_tiet_san_pham ON chi_tiet_san_pham.id_sanPham = san_pham.id WHERE chi_tiet_san_pham.id_sanPham = '$id' and chi_tiet_san_pham.quatity > 0 GROUP BY chi_tiet_san_pham.id_sanPham , chi_tiet_san_pham.size , chi_tiet_san_pham.color";
    return pdo_query($sql);
};
function getDetailProductbyColor($id){
    $sql = "select id_sanPham , color , SUM(quatity) as total from san_pham INNER JOIN chi_tiet_san_pham ON chi_tiet_san_pham.id_sanPham = san_pham.id WHERE chi_tiet_san_pham.id_sanPham = '$id' and chi_tiet_san_pham.quatity > 0 GROUP BY chi_tiet_san_pham.id_sanPham , chi_tiet_san_pham.color";
    return pdo_query($sql); 
};

function getDetailProductbySize($id){
    $sql = "select size , SUM(quatity) as total from san_pham INNER JOIN chi_tiet_san_pham ON chi_tiet_san_pham.id_sanPham = san_pham.id WHERE chi_tiet_san_pham.id_sanPham = '$id' and chi_tiet_san_pham.quatity > 0 GROUP BY chi_tiet_san_pham.id_sanPham , chi_tiet_san_pham.size ";
    return pdo_query($sql);
};
function setComments($id_sanPham , $id_user , $comments){
    $sql = "insert into comments(id_sanPham , id_user , comment) 
    values ('$id_sanPham' , '$id_user', '$comments')
    ";
    pdo_execute($sql);
};
function checkComment($id_sanPham , $id_user){
    $sql = "select * from comments where id_sanPham = '$id_sanPham' and id_user = '$id_user'";
    return pdo_query($sql); 
};
function getComment($id_sanPham) {
    $sql = "select comments.* , users.name as nameUser from comments INNER JOIN users ON comments.id_user = users.id where id_sanPham = '$id_sanPham' ORDER BY comments.id DESC limit 4";
    return pdo_query($sql);
};
function getProductFolders($id_sanPham){
    $sql = "select id_danhMuc from san_pham where id ='$id_sanPham'";
    $id_danhMuc = pdo_query_one($sql);
    $sql2 = "select san_pham.* from san_pham where san_pham.id_danhMuc = ".$id_danhMuc['id_danhMuc']." and san_pham.id <> '$id_sanPham' limit 4";
    return pdo_query($sql2);
};

function increaseViews($id){
    $sql = "update san_pham set views = views + 1 where id='$id'";
    pdo_execute($sql);
}
?>