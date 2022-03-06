<?php

namespace App\Http\Controllers;

use App\Http\DTO\UsuarioDTO;
use App\Models\UsuarioModel;
use App\Helpers\AjaxReturn;
use App\Helpers\SessionManager;
use App\Http\Middlewares\AuthMiddleware;
use Exception;

    class UsuarioController extends UsuarioDTO{

        private $usuarioModel;
        private $usuarioDTO;
        
        public function __construct(){
            $this->usuarioDTO = new UsuarioDTO;
            $this->usuarioModel = new UsuarioModel($this->usuarioDTO);
        }

        public function autenticar(){
            if(AuthMiddleware::validateUser()){
                return AjaxReturn::data('error','Você já está autenticado, não é possível autenticar!');
            }else{
                try {
                    $sessionInformation = $this->usuarioModel->autenticar();
                    SessionManager::armazenar('usuario','id',$sessionInformation[0]['id']);
                    return AjaxReturn::data('success','Usuário autenticado com sucesso, aguarde alguns segundos...');
                } catch (Exception $e) {
                   return AjaxReturn::data('error',$e->getMessage());
                }
            }
        }

        public function registrar(){
            if(AuthMiddleware::validateUser()){
                return AjaxReturn::data('error','Você está autenticado no sistema, deslogue para registrar outra conta!');
            }else{
                try {
                    $this->usuarioModel->registrar();
                    return AjaxReturn::data('success','O usuário informado foi cadastrado com sucesso!');
                } catch (Exception $e) {
                    return AjaxReturn::data('error',$e->getMessage());
                }
            }
        }

        public function deslogar(){
            AuthMiddleware::renderTemplate('index.php');
        }


    }

?>