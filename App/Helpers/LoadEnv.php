<?php

namespace App\Helpers;

/*
    Método estático responsável por transformar os dados do arquivo .env
    Em Constantes & $_ENV.
*/
    class LoadEnv{

        public static function transform(){
            $env_file = '.env';
                if(file_exists($env_file)){
                   $env_file = file_get_contents($env_file);
                   $constants = explode("\n",$env_file);
                    foreach($constants as $value){
                       $real_values = explode("=",$value);
                        // Caso atenda a condição as variáveis são setadas.
                        if($real_values[0] && $real_values[1]){
                            $_ENV[trim($real_values[0])] = $real_values[1];
                            define(trim($real_values[0]),$real_values[1]);
                        }
                    }
                }else{
                    /*
                        Avisa o usuário sobre a falta do arquivo .env e o perigo de iniciar o projeto sem o mesmo.
                    */
                    echo 'O arquivo enviorement (.env) não foi localizado, portanto, o projeto não será iniciado <br>
                    Você pode comentar o LoadEnv no arquivo index.php da pasta raiz, entretanto, o projeto 
                    <br>pode não funcionar corretamente sem o arquivo .env';
                    exit;
                }
        }

    }