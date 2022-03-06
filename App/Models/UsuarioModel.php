<?php

namespace App\Models;
use App\Database\Connect;
use Exception;
use PDO;

    class UsuarioModel{

        private $usuarioDTO;
        private $conn;
        private $query;
        private $bind;
        private $exec;
        private $resul;

        public function __construct($usuarioDTO){
            $this->usuarioDTO = $usuarioDTO;
            $this->conn = new Connect;
        }

        public function autenticar(){
            // Caso o usuário exista e os dados estejam corretos é retornado os dados para o front, para que sejam setados no SessionManager
            $this->query = "SELECT id,nome,email,permissao FROM usuarios WHERE (nome = :nome OR email = :nome) AND password = :password";
            $this->exec = $this->conn->stmt->prepare($this->query);
            $this->bind = array(
                ":nome"=>$this->usuarioDTO->getUsername(),
                ":password"=>md5(base64_encode($this->usuarioDTO->getPassword()))
            );
                switch($this->exec->execute($this->bind)){
                    case true:
                        $this->resul = $this->exec->fetchAll(PDO::FETCH_ASSOC);
                            if(!empty($this->resul)){
                                return $this->resul;
                            }else{
                                throw new Exception('O usuário ou senha não conferem!');
                            }
                    break;

                    case false:
                        throw new Exception('Ocorreu um erro ao validar as informações, tente novamente mais tarde!');
                    break;
                }
        }

        public function registrar(){
            // Verifica se existe algum usuário já cadastro com as respectivas informações
            $this->query = "SELECT id FROM usuarios WHERE nome = :nome OR email = :email";
            $this->exec = $this->conn->stmt->prepare($this->query);
            $this->bind = array(
                ":nome"=>$this->usuarioDTO->getUsername(),
                ":email"=>$this->usuarioDTO->getEmail()
            );
                switch($this->exec->execute($this->bind)){
                    case true:
                        $this->resul = $this->exec->fetchAll(PDO::FETCH_ASSOC);
                            if(empty($this->resul)){
                                // Caso não haja um usuário, realiza o cadastro
                                $this->query = "INSERT INTO usuarios VALUES(NULL,:nome,:email,:password,2,CURRENT_TIMESTAMP(),NULL,0)";
                                $this->exec = $this->conn->stmt->prepare($this->query);
                                $this->bind = array(
                                    ":nome"=>$this->usuarioDTO->getUsername(),
                                    ":email"=>$this->usuarioDTO->getEmail(),
                                    ":password"=>md5(base64_encode($this->usuarioDTO->getPassword()))
                                );
                                    if($this->exec->execute($this->bind)){
                                        return true;
                                    }else{
                                        throw new Exception('Ocorreu um erro ao efetuar o cadastro, tente novamente mais tarde!');
                                    }
                            }else{
                                throw new Exception('O username ou email informados já estão cadastrados no sistema!');
                            }
                    break;

                    case false:
                        throw new Exception('Ocorreu um erro ao validar as informações, tente novamente mais tarde!');
                    break;
                }
        }

    }

?>