
<?php
include_once 'View/header.php';
include_once 'model/connect.php';
include_once 'View/home.php';
// Tạo đối tượng kết nối cơ sở dữ liệu
$db = new ConnectModel();  // Tạo kết nối cơ sở dữ liệu

$page = isset($_GET['home']) ? $_GET['home'] : 'home';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$iddm = isset($_GET['iddm']) ? $_GET['iddm'] : '';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'home':
            include_once 'Controller/homeCrl.php';
            $HomeController = new HomeController($id, $iddm);
            break;

        // case 'contact':
        //     include_once 'controller/ContactController.php';
        //     $ContactController = new ContactController();
        //     break;

        case 'sanpham':    
            include_once 'Controller/productCrl.php'; 
            $ProductController = new ProductController($db);  // Truyền đối tượng $db vào constructor
            $ProductController->viewSanpham();
            break;

        // case 'chitiet':
        //     // Xử lý trang chi tiết sản phẩm
        //     include_once 'controllers/ProducController.php';  // Bao gồm file controller
        //     $ProductController = new ProductController();// Truyền đối tượng $db vào constructor
        //     $ProductController->viewDetail();
        //     break;

        default:
            include_once 'Controllers/Trang1Controller.php';
            $Trang1Controller = new Trang1Controller();  
            break;
    }
}

include_once 'View/footer.php';
?>
