<?php
include_once 'Model/homeMod.php';  // Đảm bảo rằng model đã được include

class HomeController
{
    public function __construct($id, $iddm)
    {
        $homemodel = new HomeModel();
        $homemodel->dssp();  // Lấy danh sách sản phẩm
        include_once 'View/home.php';  // Render view
    }
}
?>
