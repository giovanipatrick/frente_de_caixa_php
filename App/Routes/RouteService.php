<?php

namespace App\Routes;
use Pecee\SimpleRouter\SimpleRouter as Route;
use App\Http\Controllers\CoreController;
use App\Http\Controllers\UsuarioController;
use App\Resources\Views\UndefinedRoute;

/*
    Sistema de Rotas
    Todas as rotas chamam um Controller & Função
*/
class RouteService extends Route{

    public static function initiate(){

        // Views
        Route::get('/',[CoreController::class,'index']);
        Route::get('/deslogar',[UsuarioController::class,'deslogar']);

        // API
        Route::group(['prefix'=>'/api/v1'],function(){

            Route::get('/autenticar',[UsuarioController::class,'autenticar']);
            Route::post('/registrar',[UsuarioController::class,'registrar']);

        });
        
        // Error
        Route::error(function(){
            return UndefinedRoute::notExists();
        });

        Route::start();

    }

}