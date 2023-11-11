<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:ital,wght@1,100;1,300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../Css/shippingPage.css" />
    <link rel="stylesheet" href="../Css/Bill.css" />
  </head>
  <body>
    <div class="container">
        <div class="productor">
            <table class="productor_table" border="1">
              <thead>
                <tr>
                  <th>Ảnh</th>
                  <th>Tên</th>
                  <th>Màu</th>
                  <th>Size</th>
                  <th>Số lượng</th>
                  <th>Đơn giá</th>
                  <th>Thành tiền</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                     $carts = $_COOKIE['carts'];
                     $newCarts = json_decode($carts);

                     
                     foreach ($newCarts as $key => $value2) {
                         $value = get_object_vars($value2);

                         $total =  intval($value['quatity'])  * intval($value['price'] ) ;
                         
                         echo '
                         <tr>
                         <td>
                           <img
                             src="../upload/'.$value['img'].'"
                             alt=""
                           />
                         </td>
                         <td>'.$value['name'].'</td>
                         <td>'.$value['color'].'</td>
                         <td>'.$value['size'].'</td> 
                         <td>'.$value['quatity'].'</td>
                         <td>'.$value['price'].'</td>
                         <td>'.$total.'</td>
                       </tr>
                         ';
                        }
                        ?>
                
              </tbody>
            </table>
          </div>
      <div class="bill_form">

        <form action="index.php?act=getBill" method="post">
            <div class="form-group">
              <label for="fullname">Họ và tên</label>
              <input type="text" class="form-control" id="fullname" name="fullname" />
            </div>
          
            <div class="form-group">
              <label for="address">Địa chỉ</label>
              <input type="text" class="form-control" id="address" name="address" />
            </div>
          
            <div class="form-group">
              <label for="phone_number">Số điện thoại</label>
              <input type="tel" class="form-control" id="phone_number" name="phone_number" />
            </div>
          
            <div class="form-group">
              <label for="payment_method">Phương thức thanh toán</label>
              <select class="form-control" id="payment_method" name="payment_method">
                <option value="tiền mặt">Tiền mặt</option>
                <option value="thẻ tín dụng">Thẻ tín dụng</option>
                <option value="thẻ ghi nợ">Thẻ ghi nợ</option>
              </select>
            </div>
          
            <div class="form-group">
              <label for="shipping_method">Phương pháp vận chuyển</label>
              <select class="form-control" id="shipping_method" name="shipping_method">
                <option value="giao hàng tận nơi">Giao hàng tận nơi</option>
                <option value="giao hàng qua bưu điện">Giao hàng qua bưu điện</option>
              </select>
            </div>

            <div class="form-group">
                <label for="note">Lưu ý</label>
                <textarea class="form-control" id="note" name="note"></textarea>
              </div>
              <div style="width: 100%;text-align: end;">

                  <button type="submit" name="submitButtom" class="btn btn-primary">Đặt Hàng</button>
              </div>
          </form>
          
      </div>
    </div>
  </body>
</html>
