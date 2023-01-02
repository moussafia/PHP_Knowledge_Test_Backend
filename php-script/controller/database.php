<?php
class Db{
    private $servername="localhost";
    private $username="root";
    private $password="";
    private $db_name="quizzapp";
    private $conn;
    function connect_pdo(){
        try{
            $this->conn=new PDO("mysql:host=".$this->servername.";dbname=".$this->db_name,$this->username,$this->password);
            return $this->conn;
        }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>