<?php

 // lấy tất cả sản phẩm trang product
    function getAllproducts() {
        $sql = " SELECT products.*,categories.name_category 
        FROM products JOIN categories ON products.id_category = categories.id_category";
        return pdo_query($sql);
    }
// lấy sản phẩm theo danh mục
    function getAllproductsByCategory($category){
        $sql = " SELECT products.*,categories.name_category 
        FROM products JOIN categories ON products.id_category = categories.id_category
        WHERE products.id_category = ?";
        return pdo_query($sql,$category);
    }   
// lấy sản phẩm theo type product     
    function getAllproductsByType($type){
        $sql ="SELECT * FROM products WHERE products.type_product = ?";
        return pdo_query($sql,$type);
    }

// lấy 1 sản phẩm trang chi tiết
    function detailProduct($id){
        $sql ="SELECT products.*,categories.name_category 
        FROM products JOIN categories ON products.id_category = categories.id_category 
        WHERE products.id_product = ?";
        return pdo_query_one($sql,$id);
    }
// sản phẩm mới trang home
    function newProduct(){
        $sql = "SELECT * FROM products 
        ORDER BY id_product DESC  LIMIT 8 ";
        return pdo_query($sql);
    }
// sản phẩm hót trang home    
    function hotProduct(){
        $sql = "SELECT * FROM products  where isHot = 1
         LIMIT 4 ";
        return pdo_query($sql);
    }
 // lấy thông tin danh mục sản phẩm
    function getCategory(){
        $sql = "SELECT * FROM categories";
        return pdo_query($sql);
    }
// lấy loại sản phẩm
    function getProductType(){
        $sql = "SELECT DISTINCT products.type_product FROM products";
        return pdo_query($sql);
    }
   

?>
