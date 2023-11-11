<?php 
session_start();
include('../model/pdo.php');
include('../model/adminModule.php');
include('../model/indexModel.php');
include('../model/detailModel.php');
$getProductSection = getProductSection();

include('./header.php');
if(isset($_GET['act'])){
    $act = $_GET['act'];

    switch ($act) {
        // điều hướng đến trang chi tiết
        case 'navigateToDetail':
            if(isset($_GET['id'])){
                $getProductById = getProductById($_GET['id']);
                $getDetailProduct = getDetailProduct($_GET['id']);
                   
                    $json_encode = json_encode($getDetailProduct);

                $getDetailProductbyColor = getDetailProductbyColor($_GET['id']);
                $getDetailProductbySize = getDetailProductbySize($_GET['id']);
                include('./body.php');
            }
        break;
        // điều hướng đến giỏ hàng
        case 'goToCart':
          include('./Cart.php');
        break;
        
        default:
        include('./body.php');
            break;
    }

}else{
    include('./body.php');
}
include('./footer.php')
?>