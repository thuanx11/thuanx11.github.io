<?php
   include '../library/pdo.php';
   $id_product = $_POST['productId'];
   $id_user = $_POST['idUser'];
   $quantity = $_POST['quantity'];
   $response = array("success" => false, "message" => "");

   if ($id_product || $id_user || $quantity) {
    
      if ($quantity == 0) {
         $response['message'] = "Xoá sản phẩm thành công";
         deleteCart($id_user,$id_product);
      }else if($id_product > 0){
         $response['message'] = "Đặt hàng thành công";
         $response['success'] = true;
         insertCart($id_user,$id_product,$quantity);
      }
   }else{
      $response['message'] = "Xảy ra lỗi";
   }

   header("Content-Type: application/json");
   echo json_encode($response);

   function insertCart($id_user,$id_product,$quantity){
         $sql = "INSERT INTO cart (id_user, id_product, quantity) VALUES (?,?,?) ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity)";
         pdo_execute($sql,$id_user,$id_product,$quantity);
   }
   function deleteCart($id_user,$id_product){
      $sql = "DELETE FROM cart WHERE id_user = $id_user AND id_product = $id_product";
      pdo_execute($sql);
   }
?>