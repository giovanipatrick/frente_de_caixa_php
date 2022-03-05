<?php

namespace App\Resources\Views;

    class UndefinedRoute{

        public static function notExists(){
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frente de Caixa - Ocorreu um erro!</title>
    <link rel="stylesheet" href="App/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="App/Public/css/all.min.css">
    <link rel="stylesheet" href="App/Public/css/project/404.css?v=<?php echo time();?>">
    <script src="App/Public/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>

        body{
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
            background-color: #2a9df4cc;
            font-family:Arial, Helvetica, sans-serif;
            font-size: 12px;
            font-weight: bold;
        }

        .container{
            width:50%;
            height: 50%;
            margin-top:11%; 
            background: #D3CCE3;  
            background: -webkit-linear-gradient(to right, #E9E4F0, #D3CCE3);  
            background: linear-gradient(to right, #E9E4F0, #D3CCE3); 

        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
            <div class="mx-auto text-center">
                <div class="container shadow-lg border border-secondary rounded p-5">
                    <div id="img-logo">
                        <img src="App/Public/svgs/project/pdv_error.svg" class="img-fluid" style="width:30%;">
                    </div>
                    <br>
                    <hr>
                    <section class="errorMessage">
                        A URL informada não existe ou está temporariamente indisponível!</b>
                        <br>
                        Caso tenha certeza que a rota 
                        <a href="<?php echo $_SERVER['REQUEST_URI'] ?>">
                        <?php echo $_SERVER['REQUEST_URI'] ?>
                        </a> 
                        é válida, entre em contato com o Administrador do sistema.
                    </section>
                    <hr>
                    <a href="/">Voltar para a página inicial</a>
                </div>

            </div>
</body>
</html>


<?php

        }

    }

?>