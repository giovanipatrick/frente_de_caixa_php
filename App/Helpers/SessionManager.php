<?php

namespace App\Helpers;

    class SessionManager{

        public static function start(){
            session_start();
        }

        public static function destroy(){
            $_SESSION = array();
            unset($_SESSION);
            session_destroy();
        }

        public static function renew(){
            session_regenerate_id();
        }

    }


?>