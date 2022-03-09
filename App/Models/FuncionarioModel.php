<?php

namespace App\Models;
use App\Database\Connect;
use Exception;
use PDO;

    class FuncionarioModel{

        private $funcionarioDTO;
        private $conn;
        private $query;
        private $bind;
        private $exec;
        private $resul;

        public function __construct($funcionarioDTO)
        {
            $this->funcionarioDTO = $funcionarioDTO;
            $this->conn = new Connect;
        }

        public function listar()
        {

        }

        public function cadastrar()
        {

        }

        public function atualizar()
        {
            
        }

        public function excluir()
        {

        }

    }