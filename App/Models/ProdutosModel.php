<?php
namespace App\Models;

use App\Database\Connect;
use Exception;
use PDO;

    class ProdutosModel{

        private $produtosDTO;
        private $conn;
        private $query;
        private $bind;
        private $exec;
        private $resul;

        public function __construct($produtosDTO)
        {
            $this->produtosDTO = $produtosDTO;
            $this->conn = new Connect;
        }

    }
?>
            