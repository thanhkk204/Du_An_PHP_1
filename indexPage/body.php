

<div class="banner_extra">
      <div class="banner_extra_1">
        <img src="../img/banner 2.webp" alt="" />
      </div>
      <div class="banner_extra_1">
        <img src="../img/banner 3.webp" alt="" />
      </div>
    </div>
    <!-- Product 1 -->
    <div class="title_product">
      <p>THIẾT KẾ MỚI</p>
    </div>

    <div class="list_product_1">

      <?php 
        foreach ($getProductSection as $key => $value) {
          $formatted_number = number_format($value['price'], 0, ',', '.');
          echo '
          <div class="product_container " onclick="navigateToDetail('.$value['id'].')">

      <img src="../upload/'.$value['image0'].'" alt="" style="display: none;">
        <img src="../upload/'.$value['image1'].'" alt="" style="display: none;">
    
      <div class="product_image">
        <img src="../upload/'.$value['image0'].'" alt="">
        
      </div>
      <div class="product_name">
      '.$value['name'].'
      </div>
      <div class="product_price">
      '.$formatted_number.' VND
      </div>

    </div>
          ';
        }
      ?>
    </div>
    <div class="watch_all">
      <span>Xem Tất Cả</span>
      <i class="fa-solid fa-arrow-right"></i>
    </div>
    <!-- banner 2 -->
    <!-- <div class="banner_extra">
      <div class="banner_extra_1">
        <img src="./img/banner 4.webp" alt="" />
      </div>
      <div class="banner_extra_1">
        <img src="./img/banner 5.webp" alt="" />
      </div>
    </div> -->

    <!-- Product 2 -->
    <!-- <div class="title_product">
      <p>BEST SALLER</p>
    </div> -->

    <!-- <div class="list_product_1">
      <div class="product_large">
        <div class="product">
          <i class="fa-solid fa-heart"></i>
          <img src="./img/gaiy 6.jpg" alt="" />
          <div class="watch_shoe">Xem Ngay</div>
        </div>
        <div class="product_name">ZOE Authetic White</div>
        <div class="product_cost">850.000đ</div>
      </div>
      <div class="product_large">
        <div class="product">
          <i class="fa-solid fa-heart"></i>
          <img src="./img/gaiy 8.jpg" alt="" />
          <div class="watch_shoe">Xem Ngay</div>
        </div>
        <div class="product_name">Zebra High Black</div>
        <div class="product_cost">700.000đ</div>
      </div>
      <div class="product_large">
        <div class="product">
          <i class="fa-solid fa-heart"></i>
          <img src="./img/giay 7.jpg" alt="" />
          <div class="watch_shoe">Xem Ngay</div>
        </div>
        <div class="product_name">ZOE Authetic N'Loop</div>
        <div class="product_cost">650.000đ</div>
      </div>
      <div class="product_large">
        <div class="product">
          <i class="fa-solid fa-heart"></i>
          <img src="./img/giay1.jpg" alt="" />
          <div class="watch_shoe">Xem Ngay</div>
        </div>
        <div class="product_name">ZOE Black Mule</div>
        <div class="product_cost">420.000đ</div>
      </div>
    </div>
    <div class="watch_all"> -->
      <!-- <span>Xem Tất Cả</span> -->
    </div>
    