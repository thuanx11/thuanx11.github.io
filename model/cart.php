<?php
 function showCart($id_user){
    $sql = "SELECT cart.*,products.* FROM cart JOIN products ON cart.id_product = products.id_product WHERE cart.id_user = ?";
    return pdo_query($sql,$id_user);
}


?>