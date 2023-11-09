
<div class="admin_right-bottom">
<div class="narbar_danhMuc">
                <a href="index.php?act=themSanPham">Thêm sản phẩm</a>
                <a href="index.php?act=layDanhSachSanPham">Danh sách</a>
                <a href="index.php?act=themSoLuongSanPham">Thêm số lượng </a>
                <a href="index.php?act=laySoLuongSanPham">Danh sách số lượng</a>
        </div>
      
        
        <form action="index.php?act=excuteAddQuatity" method="POST">
            <label for="id_sanPham">Chọn sản phẩm muốn thêm:</label>
        <select name="id_sanPham" id="id_sanPham">
                    <?php 
                    var_dump($danhSachSanPham);
                            foreach($danhSachSanPham as $value) {
                                
                                echo '
                                <option value="'.$value['id'].'">
                                <p>'.$value['name'].'</p>
                                </option>
                                ';
                            }
                    ?>;

        </select>

            <label for="size">Chọn kích thước:</label>
        <select name="size" id="size">
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>

        </select>
            <label for="color">Nhập màu giày:</label>
            <input type="text" name="color">

            <label for="quatity">Nhập số lượng giày:</label>
            <input type="number" name="quatity">

            <button type="submit" name="submit">Thêm số lượng</button>
        </form>
        
        <?php if(isset($message) && $message != ''){
       echo '<p style="color:red ; margin-top: 1.5rem;">'.$message.'</p>';
       }else{
        echo '';
       } ?> 


       
</div>