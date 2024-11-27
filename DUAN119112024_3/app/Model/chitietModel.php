<?php
class ChitietModel
{
    private $db;

    public function __construct()
    {
        include_once './app/Model/connectModel.php';
        $db = new ConnectModel();
    }

    public function laysanpham()
    {
        include_once './app/Model/connectModel.php';
        $data = new ConnectModel();
        $sql = "SELECT * FROM sanpham";
        return $data->selectall($sql);
    }

    // Phương thức lấy chi tiết sản phẩm theo ID
    public function chitietsp($id)
    {
        include_once './app/Model/connectModel.php';
        $data = new ConnectModel();
        $sql = "SELECT * FROM sanpham WHERE ID_SanPham = '$id'";
        return $data->selectall($sql);
    }
}
?>