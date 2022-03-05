<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frente de Caixa - Project</title>
    <link rel="stylesheet" href="App/Resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="App/Resources/css/all.min.css">
    <script src="App/Resources/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>

        body{
            background-image:url('App/Resources/images/pdv_bg.png'); 
            background-size: cover; 
            background-repeat:repeat-y; 
            background-color:#2a9df4;
        }

        body,.input-group-text,.btn,.form-control{
            font-family: Arial, Helvetica, sans-serif !important;
            font-size: 15px !important;
        }

        .input-group-text{
            width:45px;
        }

        .span-login, .btn-login, .swal2-confirm{
            text-shadow: 1px 1px silver !important; 
            background-color:#2a9df4 !important;
        }

        .div-login{
            max-width: 30%; 
            margin-top:11%; 
            background-color:#FFEFD5cc;
        }

        .a-cad{
            text-decoration:none; 
            text-shadow: 1px 1px silver;
        }

        .fa-size{
            text-align:center !important;
            width:27px !important;
            height:20px !important;
        }
        
    </style>
</head>
<body>

<div class="div-login mx-auto text-center shadow-lg p-4 border border-secondary rounded">

<div id="logo">
    <img src="App/Resources/images/pdv_logo.png" class="img-fluid">
</div>

<div class="input-group mt-4">
    <div class="input-group-prepend text-center">
        <span class="input-group-text span-login p-2 border-0 rounded shadow">
        <i class="fa-solid fa-user fa-size text-light" aria-hidden="true"></i>
        </span>
    </div>
    <input type="text" class="form-control" placeholder="Digite o usuário..."/>
</div>

<div class="input-group mt-1">
    <div class="input-group-prepend text-center">
        <span class="input-group-text span-login p-2 border-0 rounded shadow">
        <i class="fa-solid fa-key fa-size text-light" aria-hidden="true"></i>
        </span>
    </div>
    <input type="text" class="form-control" placeholder="Digite a senha..."/>
</div>

<button type="submit" class="btn-login mt-2 p-2 btn rounded shadow text-light" onclick="errorMessage()">
        <i class="fa-solid fa-arrow-right-to-bracket fa-2x text-light" aria-hidden="true"></i>
</button>

<hr>
<a href="#" class="a-cad">Não possui conta? <br>Cadastre-se agora!</a>

</div>

<script>
function errorMessage(){
    Swal.fire('Tela ainda não concluída','O projeto está em desenvolvimento!','info');
}
</script>

    
</body>
</html>