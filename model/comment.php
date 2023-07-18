<?php
    function showComment($id_product){
        $sql ="SELECT comment.*, users.fullname
        FROM comment 
        JOIN users ON comment.id_user = users.id_user WHERE comment.id_product = ?";
        return pdo_query($sql,$id_product);
    }
    function insertComment($content,$user,$id_product){
        $sql = "insert into comment(content,id_user,id_product) values(?,?,?)";
        pdo_execute($sql,$content,$user,$id_product);
    }
    $message = "";
    if (isset($_POST['addComment'])) {
        $content = $_POST['message'];
        $id_product = $_GET['id_product'];
        $user =    $_SESSION['acctiveAcount']['id_user'];
        if (!$content) {
            $message = "Bình luận không được để trống";
        }else{
            insertComment($content,$user,$id_product);
            $message = "Đã gửi";
        }
     }

?>