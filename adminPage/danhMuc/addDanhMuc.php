

<div class="admin_right-bottom">

      <nav class="narbar_danhMuc">
      <ul>
      <li><a href="index.php?act=themDanhMuc">Thêm danh mục</a></li>
      <li> <a href="index.php?act=layDanhSachDanhMuc">Danh sách</a></li>
      </ul>
      </nav>
      
       <form action="index.php?act=excuteAddDM" method="POST" class="form_danhMuc">
        <label for="name" > Nhập tên loại:</label>
        <input type="text" id="name" name="name">
        <button type="submit" name="submit">Thêm danh mục</button>
       </form>

      

       <?php if(isset($message) && $message != ''){
       echo '<p style="color:red ; margin-top: 1.5rem;">Bạn đã thêm thành công danh mục</p>';
       }else{
        echo '';
       } ?>
       
</div>


