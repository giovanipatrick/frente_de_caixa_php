<?php

namespace App\Helpers;

    class SessionManager{

        public static function start(){
            session_start();
        }

        public static function get(){
            self::start();
            return $_SESSION;
        }

        public static function destroy(){
            self::start();
            $_SESSION = array();
            unset($_SESSION);
            session_destroy();
        }

        public static function renew(){
            self::start();
            session_regenerate_id();
        }

        public static function armazenar($tipo,$key,$value){
            self::start();
           $_SESSION[$tipo][$key] = $value;
        }

    }


?>