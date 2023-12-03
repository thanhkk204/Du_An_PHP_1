
<!-- Banner 1 -->
<div class="banner_extra">
      <a href="index.php?act=searchItems" style="display: block; " class="banner_extra_1">
        <img src="../img/banner 2.webp" alt="" />
      </a>
      <a href="index.php?act=searchItems" style="display: block; " class="banner_extra_1">
        <img src="../img/banner 3.webp" alt="" />
      </a>
    </div>
    <!-- Product 1 -->
    <div class="title_product">
      <p>THIẾT KẾ MỚI</p>
    </div>

    <div class="list_product_1">

      <?php 
        foreach ($getProductSectionFull as $key => $value) {
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
    <a href="index.php?act=searchItems" style="display: block; " class="watch_all" >
      <span>Xem Tất Cả</span>
      <i class="fa-solid fa-arrow-right"></i>
     </a>
    <!-- banner 2 -->
    <div class="banner_extra">
      <a href="index.php?act=searchItems" style="display: block; " class="banner_extra_1">
        <img src="../img/banner 4.webp" alt="" />
      </a>
      <a href="index.php?act=searchItems" style="display: block; " class="banner_extra_1">
        <img src="../img/banner 5.webp" alt="" />
      </a>
    </div>
    <!-- Product 1 -->
    <div class="title_product">
      <p>TOP HOT NHẤT</p>
    </div>

    <div class="list_product_1">

      <?php 
        foreach ($getProductViews as $key => $value) {
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
    <a href="index.php?act=searchItems" style="display: block; " class="watch_all" >
      <span>Xem Tất Cả</span>
      <i class="fa-solid fa-arrow-right"></i>
     </a>

     <!-- Body -->
    </div>
    