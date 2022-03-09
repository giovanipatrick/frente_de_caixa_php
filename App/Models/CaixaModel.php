<?php
namespace App\Models;

use App\Database\Connect;
use Exception;
use PDO;

    class CaixaModel{

        private $caixaDTO;
        private $conn;
        private $query;
        private $bind;
        private $exec;
        private $resul;

        public function __construct($caixaDTO)
        {
            $this->caixaDTO = $caixaDTO;
            $this->conn = new Connect;
        }

    }
?>
            