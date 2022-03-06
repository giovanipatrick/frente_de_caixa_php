<?php

namespace App\Http\Middlewares;

use App\Helpers\LoadView;
use App\Helpers\SessionManager;
SessionManager::start();

class AuthMiddleware{

        /*
            Retorna para o Controller
            True caso o usuário esteja autenticado
            False caso não esteja autenticado
        */
        public static function validateUser(){
            if(SessionManager::get()['usuario']['id']){
                return true;
            }else{
                return false;
            }
        }

        /*
            Utilizado para carregar views em que o usuário necessita estar logado para visualizar
        */
        public static function renderTemplate($template){
            if(!empty(SessionManager::get()['usuario']['id'])){
                LoadView::template($template);
            }else{
                Header('Location: /');
            }
        }

       /*
            Utilizado para carregar views em que o usuário necessita estar deslogado para visualizar
       */
       public static function outTemplate($template){
           if(empty(SessionManager::get()['usuario']['id'])){
               LoadView::template($template);
           }else{
               Header('Location: /home');
           }
       }

    }

?>