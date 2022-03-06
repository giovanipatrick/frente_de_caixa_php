<?php

namespace App\Helpers;

    class SessionManager{

        public static function start(){
            session_start();
        }

        public static function get(){
            return $_SESSION;
        }

        public static function destroy(){
            $_SESSION = array();
            unset($_SESSION);
            session_destroy();
        }

        public static function renew(){
            session_regenerate_id();
        }

        public static function armazenar($tipo,$key,$value){
           $_SESSION[$tipo][$key] = $value;
        }

    }


?>