<?php

namespace App\Http\Controllers;

use App\Http\DTO\CoreDTO;
use App\Http\Middlewares\AuthMiddleware;

    class CoreController extends CoreDTO{

        public function index(){
            AuthMiddleware::outTemplate('index.php');
        }


    }