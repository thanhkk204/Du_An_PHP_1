
<div class="admin_right-bottom">
        <div class="narbar_danhMuc">
                <a href="index.php?act=themSanPham">Thêm danh mục</a>
                <a href="index.php?act=layDanhSachSanPham">Danh sách</a>
                <a href="index.php?act=themSoLuongSanPham">Thêm số lượng</a>
                <a href="index.php?act=laySoLuongSanPham">Danh sách số lượng</a>
        </div>
       <form action="index.php?act=excuteAddSP" method="POST" enctype="multipart/form-data">
        <label for="name" > Tên sản phẩm:</label>
        <input type="text" id="name" name="name">
        <label for="price" >Giá:</label>
        <input type="number" id="price" name="price">

       <input type="file" name="image[]" multiple>

       <label for="description" >Mô tả:</label>
        <input type="text" id="description" name="description">

       <label for="origin" >Xuất xứ:</label>
        <input type="text" id="origin" name="origin">

        <label for="fabric" >Chất liệu:</label>
        <input type="text" id="fabric" name="fabric">

        <label for="brand" >Thương hiệu:</label>
        <input type="text" id="brand" name="brand">

        <select name="id_danhMuc" id="id_danhMuc">
                    <?php 
                    var_dump($listDanhMuc);
                            foreach($listDanhMuc as $value) {
                                extract($value);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                    ?>;
        </select>

        <button type="submit" name="submit">Thêm danh mục</button>
       </form>

       

       <?php if(isset($message) && $message != ''){
       echo '<p style="color:red ; margin-top: 1.5rem;">'.$message.'</p>';
       }else{
        echo '';
       } ?> 

       <?php if(isset($err) && $err != ''){
       echo '<p style="color:red ; margin-top: 1.5rem;">'.$err.'</p>';
       }else{
        echo '';
       } ?> 
       
</div>
