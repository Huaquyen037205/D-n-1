<?php
include_once './app/Model/chitietModel.php';  // Bao gồm file ChitietModel

class ProductController {
    private $product;
    
    // Constructor nhận kết nối cơ sở dữ liệu
    public function __construct() {
        // Khởi tạo đối tượng ChitietModel với kết nối $db
       include_once './app/Model/connectModel.php';
       $db = new ConnectModel();
    }

    public function viewSanPham(){
      include_once './app/views/sanpham.php';
    }

    // Phương thức hiển thị chi tiết sản phẩm
    public function viewDetail() {
       include_once './app/views/chitiet.php';
    }
}
?>
