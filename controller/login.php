<?php
 session_start();
 $_SESSION['acctiveAcount'] = [];
 include '../library/pdo.php';
$username = $_POST["username"];
$password = $_POST["password"];

$response = array("success" => false, "message" => "");
if (!$username || !$password) {
    $response["message"] = "Nhập đầy đủ thông tin";
}else{
    $result = checkLogin($username, $password);
    if (!$result) {
        $response["message"] = "Tài khoản hoặc mật khẩu không chính xác";
    }else{
        if ($result['isBlock'] == 0) {
            $response["message"] = "Tài khoản bị khoá";
        }else{
            $response["success"] = true;
            $response["message"] = $result;
            $_SESSION['acctiveAcount'] = $result;
        }
     
    }
}
header("Content-Type: application/json");
echo json_encode($response);
// Kiểm tra dữ liệu đăng nhập và trả về kết quả tương ứng
function checkLogin($username,$password){
    $sql ="select * FROM users WHERE username = '$username' and password = '$password'";
    return pdo_query_one($sql);
}
?>
