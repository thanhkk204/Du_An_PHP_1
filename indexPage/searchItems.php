<div class="searchItems_container">
    <div class="searchItems_form">

            <div>
                <p class="links_pop">Loại Sản Phẩm</p>
                
                <div class="searchItems_pop">
                <ul>
    
    <?php 
        foreach ($getDanhMuc as $key => $value) {
            echo '
            <li>

            <a href="index.php?act=getItemsFolders&id='.$value['id'].'">'.$value['name'].'</a>
             </li>
            ';
        }
    ?>
    
</ul>
                </div>
               
                
            </div>
            
            <div>
                <p class="links_pop">Màu</p>
                
                <div class="searchItems_pop">
                   <ul>
    
                            <?php 
                                foreach ($color as $key => $value) {
                                    echo '
                                    <li>

                                    <a href="index.php?act=getItemsColor&name='.$value['color'].'">'.$value['color'].'</a>
                                     </li>
                                    ';
                                }
                            ?>
                            
                    </ul>
                </div>
            </div>

            <div>
                <p class="links_pop">Size</p>
                
                <div class="searchItems_pop">
                    <ul>
    
                            <?php 
                                foreach ($size as $key => $value) {
                                    echo '
                                    <li>

                                    <a href="index.php?act=getItemsSize&size='.$value['size'].'">'.$value['size'].'</a>
                                     </li>
                                    ';
                                }
                            ?>
                            
                    </ul>
                </div>
            </div>
        </div>
<div class="searchItems_items">

    <div class="list_product_grid">

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
</div>
</div>