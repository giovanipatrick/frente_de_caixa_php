<?php

namespace App\Database;
use PDO;
use PDOException;

class Connect{

    public $stmt;
    private $host;
    private $port;
    private $db;
    private $user;
    private $pass;


    public function __construct(){
        $this->host = "localhost";
        $this->port = "3306";
        $this->db =  "frente_caixa";
        $this->user = "root";
        $this->pass = "kratos.2010";
        try {
            $this->stmt = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->db;charset=utf8","$this->user","$this->pass");
            return true;
        }catch(PDOException $error){
            //print_r($error);
        }

    }
}

