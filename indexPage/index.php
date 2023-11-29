<?php 
session_start();
include('../model/pdo.php');
include('../model/adminModule.php');
include('../model/indexModel.php');


    $getProductSection = getProductSection();
    $getProductSectionFull = getProductSectionFull();
include('./header.php');
if(isset($_GET['act'])){
    $act = $_GET['act'];

    switch ($act) {
       
        case 'goToRegister':
            include('./registerPage.php');
        break;

        // case 'register':
        //     if(isset($_POST['submitRegister'])){
        //         $name = $_POST['name'];
        //         $email = $_POST['email'];
        //         $phone = $_POST['phone'];
        //         $address = $_POST['address'];
        //         $password = $_POST['password'];
        //         register($name , $email , $phone , $address , $password );
        //         $message = 'Bạn đã đăng kí thành công' ;
        //         include('./registerPage.php');
        //     }
        // break;

        case 'register':
            if(isset($_POST['submitRegister'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                register($name , $email , $phone , $address , $password );
                $message = 'Bạn đã đăng kí thành công' ;
                include('./registerPage.php');
            }
        break;
        // Login
        case 'logIn':
            if(isset($_POST['submitLogin'])){
                $email = $_POST['name_signIn'];
                $password = $_POST['pass_signIn'];
                $result = logIn( $email , $password );
                if ($result) {
                   
                    $_SESSION['user'] = $result;
                    // $url = $_SERVER['PHP_SELF'];
                    // header("Refresh: 0; url=$url");
                    echo '
                    <script>
                    window.location.href = "./index2.php";
                </script>
                    ';
                    // include('./body.php');
                }
            }
        break;
// Log out
        case 'logOut':
            unset($_SESSION['user']);
            echo '
                    <script>
                    window.location.href = "./index.php";
           </script>
                    ';
            
        break;
        // Xem đơn hàng 
        case 'xemDonHang':
            $id_user = $_SESSION['user']['id'];
            $danhSachDonHang = xemDonHang($id_user);
            include('./donHang.php');
        break;
        // Xem đơn hàng đã hủy
        case 'xemDonHangDaXoa':
            $id_user = $_SESSION['user']['id'];
            $danhSachDonHang = xemDonHangDaHuy($id_user);
            include('./donhanghuy.php');
        break;
        // Xóa đơn hàng  
        case 'xoaNhanDonHang':
            $id_user = $_SESSION['user']['id'];
            $id = $_GET['id'];
            xoaDonHangClient($id);
            $danhSachDonHang = xemDonHang($id_user);
            include('./donHang.php');
        break;
        // Trang tìm kiếm sản phẩm
        case 'searchItems':

            $color =  getCoLor();
            var_dump($color);
            $size =  getSize();
            var_dump($size);
            $getDanhMuc =  getDanhMuc();
            var_dump($getDanhMuc);
            
            include('./searchItems.php');
        break;
        // Trang tìm kiếm sản phẩm theo Danh mục
        case 'getItemsFolders':

            $color =  getCoLor();
            $size =  getSize();
            $getDanhMuc =  getDanhMuc();
            $getIDFolder = $_GET['id'];
            $getProductSectionFull = getItemsFolder($getIDFolder);

            include('./searchItems.php');
        break;
        // Trang tìm kiếm sản phẩm theo Màu
        case 'getItemsColor':

            $color =  getCoLor();
            $size =  getSize();
            $getDanhMuc =  getDanhMuc();
            $getNameColor = $_GET['name'];
            $getProductSectionFull = getItemsgetItemsColor($getNameColor);

            include('./searchItems.php');
        break;
        // Trang tìm kiếm sản phẩm theo size
        case 'getItemsSize':

            $color =  getCoLor();
            $size =  getSize();
            $getDanhMuc =  getDanhMuc();
            $getSize = $_GET['size'];
            $getProductSectionFull = getItemsgetItemsSize($getSize);

            include('./searchItems.php');
        break;
        // Tìm kiếm sản phẩm theo tên header
        case 'searchNameItems':

            $color =  getCoLor();
            $size =  getSize();
            $getDanhMuc =  getDanhMuc();
            $nameItems = $_POST['nameItems'];
             $getProductSectionFull = getItemsgetItemsName($nameItems);

            include('./searchItems.php');
        break;
// Default
        default:
        include('./body.php');
        break;
    }
    
}else{
    
    include('./body.php');
}
include('./footer.php')

?>

