<?php
namespace App\Models;

use App\Database\Connect;
use Exception;
use PDO;

    class PagamentoModel{

        private $pagamentoDTO;
        private $conn;
        private $query;
        private $bind;
        private $exec;
        private $resul;

        public function __construct($pagamentoDTO)
        {
            $this->pagamentoDTO = $pagamentoDTO;
            $this->conn = new Connect;
        }

    }
?>
            