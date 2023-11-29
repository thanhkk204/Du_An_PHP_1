

<div class="admin_right-bottom">

     <nav class="narbar_danhMuc">
      <ul>
      <li><a href="index.php?act=themDanhMuc">Thêm danh mục</a></li>
      <li> <a href="index.php?act=layDanhSachDanhMuc">Danh sách</a></li>
      </ul>
      </nav>
      

        <table border="1" style="border-collapse: collapse; margin-top: 2rem;" class="table_danhMuc">
            <tr>
                <th>ID</th>
                <th>Loại</th>
                <th>Chức năng</th>
            </tr>

            
                <?php 
                foreach ($danhSachDanhMuc as $key => $value) {
                    $xoaDanhMuc = '<a href="index.php?act=xoaDanhMuc&id='.$value['id'].'" class="xoaDanhMuc">Xóa</a>';
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

