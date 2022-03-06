<?php

namespace App\Resources\Partials;
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
        <script src="/App/Public/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
            <?php
        }

    }

?>