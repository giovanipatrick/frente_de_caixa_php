<?php
namespace App\Models;

use App\Database\Connect;
use Exception;
use PDO;

    class ClassificacoesModel{

        private $classificacoesDTO;
        private $conn;
        private $query;
        private $bind;
        private $exec;
        private $resul;

        public function __construct($classificacoesDTO)
        {
            $this->classificacoesDTO = $classificacoesDTO;
            $this->conn = new Connect;
        }

    }
?>
            