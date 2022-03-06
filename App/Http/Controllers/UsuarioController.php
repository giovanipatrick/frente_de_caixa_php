<?php

namespace App\Http\Controllers;

use App\Http\DTO\UsuarioDTO;
use App\Models\UsuarioModel;
use App\Helpers\AjaxReturn;
use App\Helpers\SessionManager;

    class UsuarioController extends UsuarioDTO{

        private $usuarioModel;
        
        public function __construct(){
            $this->usuarioModel = new UsuarioModel;
        }

        public function autenticar(){
            
        }

        public function registrar(){

        }

        public function deslogar(){

        }


    }

?>