<?php
class productModel
{
    public $dm;
    public $iddm;
    private $db;
    private $dulieu;

    public function dsdm()
    {
        include_once 'Model/connect.php';
        $dulieu = new ConnectModel(); 
        $sql = "select TenDM from danhmucsanpham";
        $this->dm = $dulieu->selectall($sql);
    }

    // 
    public function laysanpham(){
        include_once 'Model/connect.php';
        $dulieu = new ConnectModel(); 
        $sql = "select * from sanpham";
        return $this-> db = $dulieu->selectall($sql);
    }

    public function laysanphamtheodm(){
        include_once 'Model/connect.php';
        $dulieu = new ConnectModel(); 
        $sql = "SELECT * FROM sanpham WHERE ID_DM = ?";
        return $this->db = $dulieu->selectall($sql);
    }

    public function chitietsp($iddm) {
        include_once 'Model/connect.php';
        $dulieu = new ConnectModel(); 
        $sql = "SELECT * FROM sanpham WHERE ID_SP = $iddm";
        return $dulieu->getOne($sql);
    }
   
}

