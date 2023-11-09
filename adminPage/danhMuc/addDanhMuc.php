

<div class="admin_right-bottom">
        <div class="narbar_danhMuc">
                <a href="index.php?act=themDanhMuc">Thêm danh mục</a>
                <a href="index.php?act=layDanhSachDanhMuc">Danh sách</a>
        </div>
       <form action="index.php?act=excuteAddDM" method="POST">
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


