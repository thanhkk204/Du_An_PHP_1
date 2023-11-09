<?php 
include('../model/pdo.php');
include('../model/adminModule.php');
include('../model/indexModel.php');


    $getProductSection = getProductSection();

include('./header.php');
if(isset($_GET['act'])){
    $act = $_GET['act'];

    switch ($act) {
       
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