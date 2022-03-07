<?php

namespace App\Resources\Partials;

use App\Helpers\SessionManager;
use App\Interfaces\PartialsInterface;

/*
    Metódo estático para inclusão do Parcial Header
*/
    class Header implements PartialsInterface{

        public static function include($params = null){
            ?>
    <!DOCTYPE html>
    <html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Frente de Caixa - Project</title>
        <link rel="stylesheet" href="/App/Public/css/bootstrap.min.css">
        <link rel="stylesheet" href="/App/Public/css/all.min.css">
        <link rel="stylesheet" href="/App/Public/css/project/main.css?v=<?php echo time();?>">
        <script src="/App/Public/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    </head>
    <body>
        <!-- Navbar -->
       <nav class="navbar bg-nav shadow">
            <div class="mx-auto text-center">
                <a class="navbar-brand" href="/">
                <img src="/App/Public/images/pdv_logo.png" class="d-inline-block align-text-top img-fluid" id="img-brand">
                </a>
            </div>
        </nav>
            <?php
        }

    }

?>