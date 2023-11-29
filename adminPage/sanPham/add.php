
<div class="admin_right-bottom">
        <!-- <div class="narbar_danhMuc">
                <a href="index.php?act=themSanPham">Thêm danh mục</a>
                <a href="index.php?act=layDanhSachSanPham">Danh sách</a>
                <a href="index.php?act=themSoLuongSanPham">Thêm số lượng</a>
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


       <form action="index.php?act=excuteAddSP" method="POST" enctype="multipart/form-data" class="add_sanPham">

       <div class="form_group">
       <label for="name" > Tên sản phẩm:</label>
        <input type="text" id="name" name="name" placeholder="Nhập tên sản phẩm" required>
       </div>
        

        <div class="form_group">
        <label for="price" >Giá:</label>
        <input type="number" id="price" name="price" placeholder="Nhập giá sản phẩm" required>
       </div>

        <div class="form_group">
        <label for="image[]" >Chọn 3 ảnh:</label>
        <input type="file" name="image[]" multiple  id="image_sanPham" required>
       </div>

        

       

        <div class="form_group">
        <label for="description" >Mô tả:</label>
        <textarea name="description" id="" cols="30" rows="3" placeholder="Nhập thông tin chung cho sản phẩm"></textarea>
       </div>
        
        <!-- <input type="text" id="description" name="description"> -->

        <div class="form_group">
        <label for="origin" >Xuất xứ:</label>
        <input type="text" id="origin" name="origin" placeholder="Nhập xuất xứ" required>
       </div>

      

        <div class="form_group">
        <label for="fabric" >Chất liệu:</label>
        <input type="text" id="fabric" name="fabric" placeholder="Nhập chất liệu" required>
       </div>

       

        <div class="form_group">
        <label for="brand" >Thương hiệu:</label>
        <input type="text" id="brand" name="brand" placeholder="Nhập thương hiệu" required>
       </div>

       <div class="form_group">
        <label for="id_danhMuc" >Chọn danh mục:</label>

        <select name="id_danhMuc" id="id_danhMuc">
                    <?php 
                    var_dump($listDanhMuc);
                            foreach($listDanhMuc as $value) {
                                extract($value);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                    ?>;
        </select>

       </div>


        <button type="submit" name="submit">Thêm Sản Phẩm</button>
       </form>

       

       <?php if(isset($message) && $message != ''){
       echo '<p style="color:red ">'.$message.'</p>';
       }else{
        echo '';
       } ?> 

       <?php if(isset($err) && $err != ''){
       echo '<p style="color:red ">'.$err.'</p>';
       }else{
        echo '';
       } ?> 
       
</div>
