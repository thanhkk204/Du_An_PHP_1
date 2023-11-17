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

        case 'logOut':
            unset($_SESSION['user']);
            echo '
                    <script>
                    window.location.href = "../indexPage/index.php";
    </script>
                    ';
            
         break;

         case 'logIn':
            if(isset($_POST['submitLogin'])){
                $email = $_POST['name_signIn'];
                $password = $_POST['pass_signIn'];
                $result = logIn( $email , $password );
                if ($result) {
                    $_SESSION['user'] = $result;

                    echo '
                    <script>
                    window.location.href = "../indexPage/index.php";
    </script>
                    ';
                }
            }
        break;
        
        case 'register':
            if(isset($_POST['submitRegister'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                register($name , $email , $phone , $address , $password );
                $message = 'Bạn đã đăng kí thành công' ;
                include('../indexPage/registerPage.php');
            }
        break;

        case 'goToRegister':
            include('../indexPage/registerPage.php');
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