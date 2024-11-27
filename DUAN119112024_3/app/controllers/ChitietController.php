<?php 
class ProductController {
    private $product;
    

    public function __construct($db) {
        // Khởi tạo đối tượng ChitietModel với kết nối $db
        $this->product = new ChitietModel($db);
    }
   
    public function viewDetail() {
        include_once './app/views/chitiet.php';
    }
}
?>
