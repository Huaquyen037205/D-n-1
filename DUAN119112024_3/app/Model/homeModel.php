<?php
class HomeModel
{
    public $mangsp;  // All products
    public $onesp;   // Single product
    public $splq;    // Related products

    public function dssp()
    {
        include_once './app/Model/connectModel.php';
        $data = new ConnectModel;
        $sql = "SELECT * FROM sanpham"; // Query to fetch all products
        $this->mangsp = $data->selectall($sql); // Fetch and store all products
        

    }

    public function onesp($id)
    {
        include_once 'Model/connectModel.php';
        $data = new ConnectModel;
        $sql = "SELECT * FROM sanpham WHERE id = $id"; // Fetch a single product
        $this->onesp = $data->selectone($sql, $id); // Fetch single product
    }

    public function splq($id, $iddm)
    {
        include_once 'Model/connectModel.php';
        $data = new ConnectModel;
        $sql = "SELECT * FROM sanpham WHERE iddm = :iddm AND id <> :id"; // Fetch related products
        $data->ketnoi();
        $stmt = $data->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":iddm", $iddm);
        $stmt->execute();
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch associative array
        $data->conn = null; // Close the connection
        $this->splq = $kq; // Store related products
    }
}
