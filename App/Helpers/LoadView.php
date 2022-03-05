<?php

namespace App\Helpers;

/*
    Responsável por carregar o arquivo de View
*/
    class LoadView{

        public static function template($file){
            require 'App/Resources/Views/'.$file;
        }

    }

?>