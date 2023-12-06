<div class="container_form">
    <h1 style="margin-bottom: 2rem;">Form đăng ký</h1>
    <form action="index.php?act=register" method="POST">
      <div class="form-group">
        <label for="name">Họ và tên</label>
        <input type="text" class="form-control" id="name" name="name" required placeholder="Nhập họ và tên của bạn">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="Nhập địa chỉ email của bạn">
      </div>
      <div class="form-group">
        <label for="phone">Số điện thoại</label>
        <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Nhập số điện thoại của bạn">
      </div>
      <div class="form-group">
        <label for="address">Địa chỉ</label>
        <input type="text" class="form-control" id="address" name="address" required placeholder="Nhập địa chỉ của bạn">
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu</label>
        <input type="password" class="form-control" id="password" name="password" required placeholder="Nhập mật khẩu của bạn" >
      </div>
      
      <div style="width: 100%; text-align: end;">

          <button type="submit" name="submitRegister" id="submitRegister" class="btn btn-primary">Đăng ký</button>
      </div>
    </form>
    <?php if(isset($message) && $message != ''){
       echo '<p style="margin-top: 1rem;">'.$message.'</p>';
       }else{
        echo '';
       } ?> 

       <?php if(isset($err) && $err != ''){
       echo '<p style="color:red ; margin-top: 1rem;">'.$err.'</p>';
       }else{
        echo '';
       } ?> 

   
  </div>