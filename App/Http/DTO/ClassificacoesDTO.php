<?php
namespace App\Http\DTO;

use App\Interfaces\CoreInterface;

    class ClassificacoesDTO implements CoreInterface{
    
        public function request($value){
            return filter_var($_REQUEST[$value],FILTER_SANITIZE_ADD_SLASHES);
        }
        
    }
?>
            