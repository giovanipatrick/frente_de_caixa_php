<?php

namespace App\Helpers;

/*
    Método estático que padroniza o retorno para o front-end em JSON
*/
    class AjaxReturn{

        public static function data($type,$message){
            return json_encode(array(
                "type"=>$type,
                "message"=>$message
            ));
        }
    }