<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frente de Caixa - Project</title>
    <link rel="stylesheet" href="App/Resources/css/bootstrap.min.css">
    <script src="App/Resources/js/bootstrap.bundle.min.js"></script>
    <style>
        body,.input-group-text,.btn,.form-control{
            font-family: sans-serif !important;
            font-size: 15px !important;
        }
    </style>
</head>
<body style="background-image:url('App/Resources/images/pdv_bg.png'); background-size: cover; background-repeat:repeat-y">

<div class="mx-auto text-center shadow-lg p-5 border border-secondary rounded" style="max-width: 30%; margin-top:11%;">

<section>
    <h5 class="p-2 text-light" style="text-shadow: 1px 1px black;">Frente de Caixa - Project</h5>
</section>

<div class="input-group mt-4">
    <div class="input-group-prepend" style="width:28%;">
        <span class="input-group-text p-2 bg-secondary bg-gradient border-0 text-light rounded shadow" style="text-shadow: 1px 1px black;">
            Usuário
        </span>
    </div>
    <input type="text" class="form-control" placeholder="Digite o usuário..."/>
</div>

<div class="input-group mt-1">
    <div class="input-group-prepend" style="width:28%;">
        <span class="input-group-text p-2 bg-secondary bg-gradient border-0 text-light rounded shadow" style="text-shadow: 1px 1px black;">
            Senha  
        </span>
    </div>
    <input type="text" class="form-control" placeholder="Digite a senha..."/>
</div>

<button type="submit" class="mt-2 p-2 btn btn-secondary bg-gradient rounded shadow text-light" style="text-shadow: 1px 1px black;">
Autenticar
</button>

<hr>
<a class="text-light" href="#" style="text-decoration:none; text-shadow: 1px 1px black;">Não possui conta? <br>Cadastre-se agora!</a>

</div>

    
</body>
</html>