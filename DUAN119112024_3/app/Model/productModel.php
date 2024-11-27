<?php
class productModel
{
    public $dm;
    public $iddm;
    private $db;
    private $dulieu;

    public function dsdm()
    {
        include_once './app/Model/connectmodel.php';
        $dulieu = new ConnectModel(); 
        $sql = "select TenDanhMuc from danhmucsanpham";
        $this->dm = $dulieu->selectall($sql);
    }

    // 
    public function laysanpham(){
        include_once './app/Model/connectmodel.php';
        $dulieu = new ConnectModel(); 
        $sql = "select * from sanpham";
        return $this-> db = $dulieu->selectall($sql);
    }

    public function laysanphamtheodm(){
        include_once './app/Model/connectmodel.php';
        $dulieu = new ConnectModel(); 
        $sql = "SELECT * FROM sanpham WHERE ID_DanhMuc = ?";
        return $this->db = $dulieu->selectall($sql);
    }

    public function chitietsp($iddm) {
        include_once './app/Model/connectmodel.php';
        $dulieu = new ConnectModel(); 
        $sql = "SELECT * FROM sanpham WHERE ID_SanPham = $iddm";
        return $dulieu->getOne($sql);
    }
   
}

