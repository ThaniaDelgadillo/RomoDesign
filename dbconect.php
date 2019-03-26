<?php
class dbConect {

    private $user;
    private $pass;
    private $host;
    private $db;
    private $conn;

public function __construct(){

$this-> host ='localhost';
$this-> root = 'root';
$this-> pass =  '';
$this-> db = '03_db';

}

	public function openConn(){
    $this->conn=new mysqli(
        $this->host,
        $this->user,
        $this->pass,
        $this->db
    );
    if($this->conn->conect_errno){
    die("Error al conectarse al servidor de base de datos");
    exit();
    }
    }
    public function closeConn(){
    $this->conn->close();
    }
    public function executeQuery($sql)
    {
        echo $sql;
        return ($this->conn->query($sql));
    }
}
?>