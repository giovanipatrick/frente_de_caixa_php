<?php

namespace App\Http\DTO;
use App\Interfaces\CoreInterface;

/*
    Responsável pelo Getter & Setter
    Também pode auxiliar no Repasse de dados entre Model & Controller
*/
    class CoreDTO implements CoreInterface{

        public function request($value){
            return addslashes($_REQUEST[$value]);
        }

    }

?>