
<div class="admin_right-bottom" >

    <?php
    echo '<h1 id="getDatabase" style="display: none;">
    '.$json_encode.'
    </h1>'
    ?>
    <div class="thongKePhu">
        <div class="card" style="border-left: 4px solid #0da8e6 ;">
            <div>
                <p style="margin-bottom: 0.3rem; color: #0da8e6;">Đơn hàng giao</p>
                <p style="font-size: 1.3rem; color: grey;"><?php echo $donHangGiao['quantity']?></p>
            </div>
            <i class="fa-solid fa-file" style="color: #0da8e6;"></i>
        </div>

        <div class="card" style="border-left: 4px solid #f27c7c ;">
            <div>
            <p style="margin-bottom: 0.3rem; color: #f27c7c;">Đơn hàng hủy</p>
                <p style="font-size: 1.3rem; color: grey;"><?php echo $donHangHuy['quantity']?></p>
            </div>
            <i class="fa-solid fa-ban" style="color: #f27c7c;"></i>
        </div>
        <div class="card" style="border-left: 4px solid #1ae142 ;">
            <div>
            <p style="margin-bottom: 0.3rem; color: #1ae142;">Doanh số</p>
            <p style="font-size: 1.3rem; color: grey;"><?php $formatted_price = number_format($doanhSo['quantity'], 0, ',', '.'); echo $formatted_price?></p>
            </div>
           <p style="color: #1ae142;" >VND</p>
        </div>
        <div class="card" style="border-left: 4px solid #f4cc3b ;">
            <div>
            <p style="margin-bottom: 0.3rem; color: #f4cc3b;">Bình luận</p>
                <p style="font-size: 1.3rem; color: grey;"><?php echo $binhLuan['quantity']?></p>
            </div>
            <i class="fa-solid fa-comment" style="color: #f4cc3b;"></i>
        </div>
    </div>
    <div style="width: 100%;">
        <p style="width: 100%; height: 50px; line-height: 50px;font-size: 1.3rem; color:#0da8e6; font-weight: bold; background-color: 
#e4e6e7; border-bottom:1px solid #e4e6e7 ; padding: 0 2rem; border-radius: 10px 10px 0 0;">Doanh số trong năm nay</p>
        <div id="myfirstchart" style="height: 350px"></div>
    </div>       
    
</div>

