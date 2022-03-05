<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frente de Caixa - Project</title>
    <link rel="stylesheet" href="App/Resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="App/Resources/css/all.min.css">
    <link rel="stylesheet" href="App/Resources/css/project/login.css?v=<?php echo time();?>">
    <script src="App/Resources/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

<script src="App/Resources/js/project/login.js?v=<?php echo time();?>"></script>
</body>
</html>