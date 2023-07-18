<?php
 include '../library/pdo.php';

$keyword = $_POST['keyword'];
$response = array("success" => false, "message" =>"");
$result = searchProduct($keyword);
if ($result) {
    $response["message"] = $result;
}
header("Content-Type: application/json");
echo json_encode($response);


function searchProduct($keyword){
    $sql ="SELECT products.name_product FROM products WHERE name_product LIKE '%$keyword%'";
    return pdo_query($sql);
}
?>