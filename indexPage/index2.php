<?php 
session_start();
include('../model/pdo.php');
include('../model/adminModule.php');
include('../model/indexModel.php');


    $getProductSection = getProductSection();
    $getProductSectionFull = getProductSectionFull();
    $getProductViews = getProductViews();
    
include('./header.php');
if(isset($_GET['act'])){
    $act = $_GET['act'];

    switch ($act) {
       
        case 'goToRegister':
            include('./registerPage.php');
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
                include('./registerPage.php');
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
                include('./registerPage.php');
            }
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
                    window.location.href = "./index2.php";
    </script>
                    ';
                }
            }
        break;

        case 'logOut':
            unset($_SESSION['user']);
            echo '
                    <script>
                    window.location.href = "./index.php";
    </script>
                    ';
                
            
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

