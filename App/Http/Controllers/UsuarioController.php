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
                    if($this->getUsername() && $this->getPassword()){
                        $sessionInformation = $this->usuarioModel->autenticar();
                        SessionManager::armazenar('usuario','id',$sessionInformation[0]['id']);
                        SessionManager::armazenar('usuario','nome',$sessionInformation[0]['nome']);
                        SessionManager::armazenar('usuario','email',$sessionInformation[0]['email']);
                        SessionManager::armazenar('usuario','permissao',$sessionInformation[0]['permissao']);
                        return AjaxReturn::data('success','Usuário autenticado com sucesso, aguarde alguns segundos...');
                    }else{
                        return AjaxReturn::data('error','O usuário ou a senha não foram informados!');
                    }
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
                    if($this->usuarioDTO->getUsername() && $this->usuarioDTO->getPassword() && $this->getEmail()){
                        if(intval(strlen($this->usuarioDTO->getUsername())) <= 20){
                            if(intval(strlen($this->usuarioDTO->getPassword())) <= 100){
                                if(intval(strlen($this->usuarioDTO->getEmail()) <= 100)){
                                    $this->usuarioModel->registrar();
                                    return AjaxReturn::data('success','O usuário informado foi cadastrado com sucesso!');
                                }else{
                                    return AjaxReturn::data('error','O email deve possuir no máximo 100 caracteres!');
                                }
                            }else{
                                return AjaxReturn::data('error','A senha deve possuir no máximo 100 caracteres!');
                            }
                        }else{
                            return AjaxReturn::data('error','O username deve possuir no máximo 20 caracteres!');
                        }
                    }else{
                        return AjaxReturn::data('error','O usuário o email ou a senha são inválidos!');
                    }
                } catch (Exception $e) {
                    return AjaxReturn::data('error',$e->getMessage());
                }
            }
        }

        public function deslogar(){
            SessionManager::destroy();
            sleep(2);
            AuthMiddleware::renderTemplate('index.php');
        }


    }

?>