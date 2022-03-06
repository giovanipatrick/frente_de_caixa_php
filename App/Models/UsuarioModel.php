<?php

namespace App\Models;
use App\Database\Connect;
use Exception;

    class UsuarioModel extends Connect{

        private $usuarioDTO;
        private $query;
        private $bind;
        private $exec;
        private $resul;

        public function __construct($usuarioDTO){
            $this->usuarioDTO = $usuarioDTO;
        }

        public function autenticar(){
            // Caso o usuário exista e os dados estejam corretos é retornado os dados para o front, para que sejam setados no SessionManager
            $this->query = "SELECT id,nome,email,permissao FROM usuarios WHERE (nome = :nome OR email = :nome) AND password = :password";
            $this->exec = $this->stmt->prepare($this->query);
            $this->bind = array(
                ":nome"=>$this->usuarioDTO->getUsername(),
                ":password"=>$this->usuarioDTO->getPassword()
            );
                switch($this->exec->execute($this->bind)){
                    case true:
                        $this->resul = $this->exec->fetchAll(\PDO::FETCH_ASSOC);
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
            $this->query = "SELECT id FROM usuarios WHERE nome = :nome AND email = :email";
            $this->exec = $this->stmt->prepare($this->query);
            $this->bind = array(
                ":nome"=>$this->usuarioDTO->getUsername(),
                ":email"=>$this->usuarioDTO->getEmail()
            );
                switch($this->exec->execute($this->bind)){
                    case true:
                        $this->resul = $this->exec->fetchAll(\PDO::FETCH_ASSOC);
                            if(empty($this->resul)){
                                // Caso não haja um usuário, realiza o cadastro
                                $this->query = "INSERT INTO usuarios VALUES(NULL,:nome,:email,:password,2,CURRENT_TIMESTAMP(),NULL,0)";
                                $this->exec = $this->stmt->prepare($this->query);
                                $this->bind = array(
                                    ":nome"=>$this->usuarioDTO->getUsername(),
                                    ":email"=>$this->usuarioDTO->getEmail(),
                                    ":password"=>$this->usuarioDTO->getPassword()
                                );
                                    if($this->exec->execute($this->bind)){
                                        return true;
                                    }else{
                                        throw new Exception('Ocorreu um erro ao efetuar o cadastro, tente novamente mais tarde!');
                                    }
                            }else{
                                throw new Exception('O username e email informados já estão cadastrados no sistema!');
                            }
                    break;

                    case false:
                        throw new Exception('Ocorreu um erro ao validar as informações, tente novamente mais tarde!');
                    break;
                }
        }

    }

?>