<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    session_start(); 
    include 'library/pdo.php'; // thư viện
    include 'library/helper.php'; // các hàm hỗ trợ 
// Mô hình MVC
    require 'views/header.php';
    if (isset($_GET['link'])) {
        $link = $_GET['link'];
        switch ($link) {
            case 'cart':
                include 'model/cart.php';
                if (isset($_SESSION['acctiveAcount']['id_user'])) {
                    $id_user = $_SESSION['acctiveAcount']['id_user'];
                    $cart = showCart($id_user);
                    require 'views/cart.php';
                  } else {
                    require 'views/login.php';
                  }
                break;
            case 'search':
                require 'views/search.php';
                break;
            case 'product':
                include 'model/product.php';
                include 'controller/product.php'; // xử lý dữ liệu tìm kiếu theo loại hoặc danh mục
                $category = getCategory();
                $typeProduct =getProductType();
                require 'views/product.php';
                break;
            case 'detail':
                include 'model/comment.php';
                include 'model/product.php';
                $id = $_GET['id_product'];
                $product_detail =  detailProduct($id); 
                $showComment = showComment($id);
                require 'views/single-product.php';
                break;
            case 'checkout':
                require 'views/checkout.php';
                break;
            case 'tracking':
                require 'views/tracking.php';
                break;
            case 'user':
                if (isset($_SESSION['acctiveAcount']['id_user'])) {
                    require 'views/info.php';
                  } else {
                    require 'views/login.php';
                  }
                break;                
            default:
                require 'views/main.php';
                break;
        }
    }else{
        include 'model/product.php';
        $newProducts = newProduct();
        $hotProducts = hotProduct();
        require 'views/main.php';
    }
    require 'views/footer.php';
?>