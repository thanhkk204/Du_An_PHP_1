<!-- <div class="admin_right-bottom">
  <table class="table table-bordered table-hover table_donHang">
    <thead>
      <tr>
        <th>Ảnh</th>
        <th>Tên Sản Phẩm</th>
        <th>Tên Người Dùng</th>
        <th>Bình Luận</th>
        <th>Thời Gian</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($getComments as $key => $value) {
              extract($value) ;
                $xoaComment = '<button onclick="xoaComment('.$id.')" style="    padding: 0.5rem 0.9rem;
                border: none;
                border-radius: 10px;
                margin-left: 10px;
                margin-top: 0.3rem; 
                cursor: pointer;">Xóa</button>';
              echo '
              <tr>
              <td><img src="../upload/'.$image.'" alt="" width="100"></td>
              <td>'.$nameSanPham.'</td>
              <td>'.$nameUser.'</td>
              <td>'.$comment.'</td>
              <td>'.$timestamp.'</td>
              <td>
              '.$xoaComment.'
              </td>
            </tr>
              ';
        }
      ?>
    </tbody>
  </table>
</div> -->


<div class="admin_right-bottom">
       
<table class="table_listQuatity">
        <thead>
      <tr>
        <th>Ảnh</th>
        <th>Tên Sản Phẩm</th>
        <th>Tên Người Dùng</th>
        <th>Bình Luận</th>
        <th>Thời Gian</th>
        <th></th>
      </tr>
    </thead>
    <tbody >

        <?php 
        
        foreach ($getComments as $key => $value) {
          extract($value) ;
          $xoaComment = ' <button onclick="xoaComment('.$id.')" >Xóa</button>';
          echo '
          <tr>
          <td><img src="../upload/'.$image.'" alt="" width="100"></td>
          <td>'.$nameSanPham.'</td>
          <td>'.$nameUser.'</td>
          <td>'.$comment.'</td>
          <td>'.$timestamp.'</td>
          <td>
          '.$xoaComment.'
          </td>
        </tr>
          ';
        }
        ?>
    
    </tbody>
  </table>
       
</div>