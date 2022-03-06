<?php

namespace App\Http\DTO;

use App\Interfaces\CoreInterface;

    class UsuarioDTO implements CoreInterface{

        private $username;
        private $email;
        private $password;
        private $confirm;

        public function request($value){
            return filter_var($_REQUEST[$value],FILTER_SANITIZE_ADD_SLASHES);
        }

        public function setUsername(){
            $this->username = $this->request('username');
        }

        public function getUsername(){
            $this->setUsername();
            return $this->username;
        }

        public function setEmail(){
            $this->email = $this->request('email');
        }

        public function getEmail(){
            $this->setEmail();
            return $this->email;
        }

        public function setPassword(){
            $this->password = $this->request('password');
        }

        public function getPassword(){
            $this->setPassword();
            return $this->password;
        }

        public function setConfirm(){
            $this->confirm = $this->request('confirm');
        }

        public function getConfirm(){
            $this->setConfirm();
            return $this->confirm;
        }

    }


?>