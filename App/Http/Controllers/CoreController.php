<?php

namespace App\Http\Controllers;
use App\Http\DTO\CoreDTO;
use App\Helpers\LoadView;

    class CoreController extends CoreDTO{

        public function index(){
            LoadView::template('index.php');
        }


    }