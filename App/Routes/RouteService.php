<?php

namespace App\Routes;
use Pecee\SimpleRouter\SimpleRouter as Route;
use App\Http\Controllers\CoreController;

/*
    Sistema de Rotas
    Todas as rotas irão chamar um Controller & Função
*/
class RouteService extends Route{

    public static function initiate(){

        Route::get('/',[CoreController::class,'index']);
        
        Route::error(function(){
            echo 'Ocorreu um erro 404';
        });

        Route::start();

    }

}