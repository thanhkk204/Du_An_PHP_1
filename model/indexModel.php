<?php
    function getProductSection(){
            $sql = "select * from san_pham limit 4";
            return pdo_query($sql);
    }
?>