<?php 
//kết nối và truy vấn thực hiện thao tác với cơ sở dữ liệu
class Product{
    // Thực hiện kết nối đến CSDL
    // Thuộc tính kết nối 
    public $host = 'localhost';
    public $dbname = 'wd19309';
    public $username = 'root';
    public $password = '';

    public $table = 'products'; // tên bảng
    public $conn; // thuộc tính kết nối

    // Tạo phương thức kết nối
    public function getConnection(){
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,
            $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
            echo "Kết nối thành công";
        }catch(Exception $e){
            echo "Lỗi".$e->getMessage();
        }
    }
}
?>