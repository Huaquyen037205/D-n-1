<?php
class DanhmucModel{
   private $db;
 public function __construct(){
    include_once './app/Model/connectModel.php';
    $this->db = new ConnectModel();
 }
 public function laydanhmuc(){
   $sql = "SELECT * FROM danhmucsanpham";
   return $this->db->selectall($sql);
 }
 public function layIDdanhmuc(){
  $sql = "SELECT ID_DanhMuc FROM danhmucsanpham";
  return $this->db->selectall($sql);
 }

}

?>