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
    <style>

        body{
            background-image:url('App/Resources/images/pdv_bg.png'); 
            background-size: cover; 
            background-repeat:repeat-y; 
            background-color:#2a9df4;
        }

        body,.input-group-text,.btn,.form-control{
            font-family: sans-serif !important;
            font-size: 15px !important;
        }

        .input-group-text{
            width:45px;
        }

        .span-login, .btn-login{
            text-shadow: 1px 1px black; 
            background-color:#2a9df4;
        }

        .div-login{
            max-width: 30%; 
            margin-top:11%; 
            background-color:#C0C0C0cc;
        }

        .a-cad{
            font-weight:bold; 
            text-decoration:none; 
            text-shadow: 1px 1px silver;
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
        <i class="fa-solid fa-user fa-2x text-light" aria-hidden="true"></i>
        </span>
    </div>
    <input type="text" class="form-control" placeholder="Digite o usuário..."/>
</div>

<div class="input-group mt-1">
    <div class="input-group-prepend text-center">
        <span class="input-group-text span-login p-2 border-0 rounded shadow">
        <i class="fa-solid fa-key fa-2x text-light" aria-hidden="true"></i>
        </span>
    </div>
    <input type="text" class="form-control" placeholder="Digite a senha..."/>
</div>

<button type="submit" class="fw-bold btn-login mt-2 p-2 btn rounded shadow text-light">
Autenticar
</button>

<hr>
<a href="#" class="a-cad">Não possui conta? <br>Cadastre-se agora!</a>

</div>

    
</body>
</html>