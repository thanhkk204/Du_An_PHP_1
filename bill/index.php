<?php 
    include('../model/pdo.php');
    include('../model/billModel.php');

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            
            case 'getBill':
              if(isset($_POST['submitButtom']) && $_COOKIE['carts']){
                $name = $_POST['fullname'];
                $address = $_POST['address'];
                $phone_number = $_POST['phone_number'];
                $payment_method = $_POST['payment_method'];
                $shipping_method = $_POST['shipping_method'];
                $note = $_POST['note'];

                themHoaDon($name , $phone_number , $address , $payment_method , $shipping_method , $note );
                $id_don_hang = getLetestId();

                if(isset($id_don_hang)){
                    $carts = $_COOKIE['carts'];
                    $cartsDecode = json_decode($carts);
                    foreach ($cartsDecode as $key => $value2) {
                        $value = get_object_vars($value2);
    
                        $totalMoney = intval($value['quatity'])  * intval($value['price'] ) ;
    
                        themChiTietHoaDon($id_don_hang , $value['id_sanPham'] , $value['quatity']  , $value['color'] , $value['size'] , $totalMoney );
                    }
                }
                include('./thanksPage.php');
              }

                break;
            
            default:
               echo 'dèault' ;
                break;
        }
    }    
    
?>