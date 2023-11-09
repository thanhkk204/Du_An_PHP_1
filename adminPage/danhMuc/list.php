

<div class="admin_right-bottom">
        <div class="narbar_danhMuc">
                <a href="index.php?act=themDanhMuc">Thêm danh mục</a>
                <a href="index.php?act=layDanhSachDanhMuc">Danh sách</a>
        </div>
      

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Loại</th>
                <th>Chức năng</th>
            </tr>

            
                <?php 
                foreach ($danhSachDanhMuc as $key => $value) {
                    $xoaDanhMuc = '<a href="index.php?act=xoaDanhMuc&id='.$value['id'].'">Xóa</a>';
                   echo "
                   <tr>
                   <td>".$value['id']."</td>
                   <td>".$value['name']."</td>
                   <td>".$xoaDanhMuc."</td>
                   </tr>
                   " ;
                }
                ?>
               
           
        </table>
       
</div>

