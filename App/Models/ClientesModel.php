<?php
namespace App\Models;

use App\Database\Connect;
use Exception;
use PDO;

    class ClientesModel{

        private $clientesDTO;
        private $conn;
        private $query;
        private $bind;
        private $exec;
        private $resul;

        public function __construct($clientesDTO)
        {
            $this->clientesDTO = $clientesDTO;
            $this->conn = new Connect;
        }

    }
?>
            