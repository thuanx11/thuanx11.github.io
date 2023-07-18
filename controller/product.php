<?php
 $allproducts ="";
        if (isset($_GET['id_category']) ) {
            $category = $_GET['id_category'];
            $allproducts =  getAllproductsByCategory($category);
        }else if(isset($_GET['type_product'])){
            $type = $_GET['type_product'];
            $allproducts = getAllproductsByType($type);
        }else if(isset($_GET['link']) == 'product'){
            $allproducts =getAllproducts();
        }
?>