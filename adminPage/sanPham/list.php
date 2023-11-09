
<div class="admin_right-bottom">
<div class="narbar_danhMuc">
                <a href="index.php?act=themSanPham">Thêm sản phẩm</a>
                <a href="index.php?act=layDanhSachSanPham">Danh sách</a>
                <a href="index.php?act=themSoLuongSanPham">Thêm số lượng</a>
                <a href="index.php?act=laySoLuongSanPham">Danh sách số lượng</a>
        </div>
      
        

        
<table  class="table_2">
          <tr>
            <th>Name</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th>Mô Tả</th>
            <th>Xuất Xứ</th>
            <th>Chất liệu</th>
            <th>Thương hiệu</th>
            <th>Danh mục</th>
            <th></th>
            
          </tr>
          <?php 
           foreach ($danhSachSanPham as $key => $value) {
            // extract($value);
            $suaSanPham = 'index.php?act=suaSanPham&id='.$value['id'];
            $xoaSanPham= 'index.php?act=xoaSanPham&id='.$value['id'];
            $path = '../upload/';
            if($value['image0']){
              $img_dir = $path . $value['image0'];
             $show_img  = '<img src="'.$img_dir.'" alt="" width="50px">';
            }else{
              $show_img = 'No photo';
            }
            $price = number_format($value['price'], 0, ",", ".");
           echo ' <tr>
           <td>'.$value['name'].'</td>
           <td>'.$price.'</td>
           <td>'.$show_img.'</td>
           <td>'.$value['description'].'</td>
           <td>'.$value['origin'].'</td>
           <td>'.$value['fabric'].'</td>
           <td>'.$value['brand'].'</td>
           <td>'.$value['id_danhMuc'].'</td>
           <td >
           <span> <a href="'.$suaSanPham.'"><button>Sửa</button></a> </span>
           <span><a href="'.$xoaSanPham.'"><button>Xóa</button></a> </span>
           
           </td>
         </tr>';
             }
          ?>
        </table>


       
</div>