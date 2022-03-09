<?php

    /*
        O Builder é uma ferramenta pra automatizar a criação de Controllers, Models & DTO
        Futuramente havera outras funções de automatização aqui dentro do BUilder conforme a demanda for surgindo.
    */
    class Builder{

        
        public static function awaitArguments($arguments)
        {

            if(count($arguments) > 4){
                throw new Exception('Builder : Argumentos inválidos, é possível passar somente 3 argumentos em uma chamada!'."\n");
            }else{
                if($arguments[1] === 'create'){
                    switch($arguments[2]){
                        case 'controller':
                            self::createController(ucfirst($arguments[3]));
                        break;

                        case 'model':
                            self::createModel(ucfirst($arguments[3]));
                        break;

                        case 'dto':
                            self::createDTO(ucfirst($arguments[3]));
                        break;

                        default:
                            throw new Exception('Builder : O parametro '.$arguments[2].' não existe!'."\n");
                        break;
                    }
                }
            }

        }

        public function create($typeName,$name,$file,$estrutura){

            if(file_exists($file)){
                throw new Exception('Builder : Já existe um '.ucfirst($typeName).' com este nome!'."\n");
            }else{
                $create_file = fopen($file,'w+');
                if(fwrite($create_file,$estrutura)){
                    echo 'Builder : '.$name.ucfirst($typeName).' criado com sucesso!'."\n";
                }else{
                    throw new Exception('Builder : Ocorreu um erro ao criar o '.$name.ucfirst($typeName).', verifique se o Builder possui a permissão correta!'."\n");
                }
                fclose($create_file);
            }

        }
        public function createController($name)
        {
            $nameDTO = $name.'DTO';
            $nameModel = $name.'Model';
            $path = 'App/Http/Controllers';
            $file = $path.'/'.$name.'Controller.php';
            $estrutura = str_replace(']','',str_replace('[','',"<?php

namespace App\Http\Controllers;

use App\Http\DTO\[$nameDTO];
use App\Models\[$nameModel];
use App\Helpers\AjaxReturn;
use App\Helpers\SessionManager;
use App\Http\Middlewares\AuthMiddleware;
use Exception;

    class $name".'Controller'." extends $name".'DTO'."{
        
    }

?>
            "));
            
            self::create('Controller',$name,$file,$estrutura);
            
        }

        public function createModel($name)
        {
            $path = 'App/Models/';
            $file = $path.'/'.$name.'Model.php';
            $estrutura = '<?php
namespace App\Models;

use App\Database\Connect;
use Exception;
use PDO;

    class '.$name.'Model{

        private $'.lcfirst($name).'DTO;
        private $conn;
        private $query;
        private $bind;
        private $exec;
        private $resul;

        public function __construct($'.lcfirst($name).'DTO)
        {
            $this->'.lcfirst($name).'DTO = $'.lcfirst($name).'DTO;
            $this->conn = new Connect;
        }

    }
?>
            ';

            self::create('Model',$name,$file,$estrutura);
            

        }

        public function createDTO($name)
        {
            $path = 'App/Http/DTO';
            $file = $path.'/'.$name."DTO.php";
            $estrutura = '<?php
namespace App\Http\DTO;

use App\Interfaces\CoreInterface;

    class '.$name.'DTO implements CoreInterface{
    
        public function request($value){
            return filter_var($_REQUEST[$value],FILTER_SANITIZE_ADD_SLASHES);
        }
        
    }
?>
            ';
            

            self::create('DTO',$name,$file,$estrutura);

        }

    }

    try {
        Builder::awaitArguments($argv);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>