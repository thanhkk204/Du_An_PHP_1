
<div class="admin_right-bottom">
       
<table class="table_listQuatity">
    <thead>
      <tr>
        <th>Tên</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Chức vụ</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody >

        <?php 
        
        foreach ($getUsers as $key => $value) {
          $xoaNguoiDung = ' <button onclick="xoaNguoiDung('.$value['id'].')">Xóa</button>';
                echo '
                <tr>
                <td>'.$value['name'].'</td>
                <td>'.$value['email'].'</td>
                <td>'.$value['phone'].'</td>
                <td>'.$value['address'].'</td>
                <td>'.$value['role'].'</td>
                <td>'.$xoaNguoiDung.'</td>
                </tr>
                ';
        }
        ?>
    
    </tbody>
  </table>
       
</div>