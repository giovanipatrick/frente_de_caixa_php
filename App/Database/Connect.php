<?php

namespace App\Database;

class Connect{

    public $stmt;
    private $host;
    private $port;
    private $db;
    private $user;
    private $pass;


    public function __construct(){
        $this->host = DB_SERVER;
        $this->port = DB_PORT;
        $this->db =  DB_NAME;
        $this->user = DB_USER;
        $this->pass = DB_PASS;
        $this->stmt = new \PDO("mysql:host=$this->host;port=$this->port;dbname=$this->db;charset=utf8","$this->user","$this->pass");
    }

}