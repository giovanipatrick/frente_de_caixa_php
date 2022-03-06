<?php

namespace App\Http\Controllers;

use App\Http\DTO\UsuarioDTO;
use App\Models\UsuarioModel;
use App\Helpers\AjaxReturn;
use App\Http\Middlewares\AuthMiddleware;

    class UsuarioController extends UsuarioDTO{

        private $usuarioModel;
        
        public function __construct(){
            $this->usuarioModel = new UsuarioModel;
        }

        public function autenticar(){
            if(AuthMiddleware::validateUser()){
                return AjaxReturn::data('error','Você já está autenticado, não é possível autenticar!');
            }else{
                return 'Autenticar';
            }
        }

        public function registrar(){
            if(AuthMiddleware::validateUser()){
                return AjaxReturn::data('success','Você está autenticado no sistema, deslogue para registrar outra conta!');
            }else{
                return 'Registar';
            }
        }

        public function deslogar(){
            AuthMiddleware::renderTemplate('index.php');
        }


    }

?>