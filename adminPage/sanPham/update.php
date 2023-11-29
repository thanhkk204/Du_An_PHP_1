
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

        <h1 style="text-align: center;margin: 0 0 0.9rem 0;">Cập Nhật Sản Phẩm</h1>
       <form action="index.php?act=suaSanPhamExcute&id=<?php echo  $layMotSanPham['id']?>" method="POST" enctype="multipart/form-data" class="add_sanPham">

       <div class="form_group">
       <label for="name" > Tên sản phẩm:</label>
        <input type="text" id="name" name="name" placeholder="Nhập tên sản phẩm" value="<?php echo ''.$layMotSanPham['name'] ?>" required>
       </div>
        

        <div class="form_group">
        <label for="price" >Giá:</label>
        <input type="number" id="price" name="price" placeholder="Nhập giá sản phẩm" value="<?php echo ''.$layMotSanPham['price'] ?>" required>
       </div>

        <div class="form_group">
        <label for="image[]" >Chọn 3 ảnh:</label>
        <input type="file" name="image[]" multiple  id="image_sanPham" required>
       </div>

        

       

        <div class="form_group">
        <label for="description" >Mô tả:</label>
        <textarea name="description" id="" cols="30" rows="3" placeholder="Nhập thông tin chung cho sản phẩm" ><?php echo ''.$layMotSanPham['description'] ?></textarea>
       </div>
        <!-- <input type="text" id="description" name="description"> -->

        <div class="form_group">
        <label for="origin" >Xuất xứ:</label>
        <input type="text" id="origin" name="origin" value="<?php echo ''.$layMotSanPham['origin'] ?>" placeholder="Nhập xuất xứ" required>
       </div>

      

        <div class="form_group">
        <label for="fabric" >Chất liệu:</label>
        <input type="text" id="fabric" name="fabric" value="<?php echo ''.$layMotSanPham['fabric'] ?>" placeholder="Nhập chất liệu" required>
       </div>

       

        <div class="form_group">
        <label for="brand" >Thương hiệu:</label>
        <input type="text" id="brand" name="brand" value="<?php echo ''.$layMotSanPham['brand'] ?>" placeholder="Nhập thương hiệu" required>
       </div>

       <div class="form_group">
        <label for="id_danhMuc" >Chọn danh mục:</label>

        <select name="id_danhMuc" id="id_danhMuc">
                    <?php 
                    
                            foreach($listDanhMuc as $value) {
                                extract($value);
                                if ($layMotSanPham['id_danhMuc'] == $id ) {
                                    echo '<option value="'.$id.'" selected="selected" >'.$name.'</option>';
                                }else{
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            }
                    ?>;
        </select>

       </div>


        <button type="submit" name="submit">Cập Nhật</button>
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
