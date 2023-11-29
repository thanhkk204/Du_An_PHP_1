
<div class="admin_right-bottom">
        <!-- <div class="narbar_danhMuc">
                <a href="index.php?act=themSanPham">Thêm sản phẩm</a>
                <a href="index.php?act=layDanhSachSanPham">Danh sách</a>
                <a href="index.php?act=themSoLuongSanPham">Thêm số lượng </a>
                <a href="index.php?act=laySoLuongSanPham">Danh sách số lượng</a>
        </div> -->

        <nav class="narbar_danhMuc">
      <ul>
      <li><a href="index.php?act=themSanPham">Thêm sản phẩm</a></li>
      <li><a href="index.php?act=layDanhSachSanPham">Danh sách</a></li>
      <li><a href="index.php?act=themSoLuongSanPham">Thêm số lượng</a></li>
      <li><a href="index.php?act=laySoLuongSanPham">Danh sách số lượng</a></li>
      </ul>
      </nav>
      
        
        <form action="index.php?act=excuteAddQuatity" method="POST" class="add_sanPham">
            <div class="form_group">
                <label for="id_sanPham">Chọn sản phẩm:</label>
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

            </div>

            <div class="form_group">
                <label for="size">Kích thước:</label>
                <select name="size" id="size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
               </select>

            </div>

            <div class="form_group">
            <label for="color">Màu giày:</label>
            <input type="text" name="color" required>
            </div>
            <div class="form_group">
            <label for="quatity">Số lượng:</label>
            <input type="number" name="quatity" min="1" required>
            </div>

            

           

            <button type="submit" name="submit">Thêm số lượng</button>
        </form>
        
        <?php if(isset($message) && $message != ''){
       echo '<p style="color:red ">'.$message.'</p>';
       }else{
        echo '';
       } ?> 


       
</div>