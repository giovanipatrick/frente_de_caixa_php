<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frente de Caixa - Project</title>
    <link rel="stylesheet" href="App/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="App/Public/css/all.min.css">
    <link rel="stylesheet" href="App/Public/css/project/login.css?v=<?php echo time();?>">
    <script src="App/Public/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<div class="div-login mx-auto text-center shadow-lg p-4 border border-secondary rounded">

<div id="logo">
    <img src="App/Public/images/pdv_logo.png" class="img-fluid">
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
    <input type="password" class="form-control" placeholder="Digite a senha..."/>
</div>

<button type="submit" class="btn-login mt-2 p-2 btn rounded shadow text-light" onclick="errorMessage()">
        <i class="fa-solid fa-arrow-right-to-bracket fa-2x text-light" aria-hidden="true"></i>
</button>

<hr>
<!-- Modal de Cadastro -->
<div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title" id="cadastroModalLabel">
            <img src="App/Public/images/pdv_cade.png" class="img-fluid" id="img-cad">
        </div>
      </div>
      <div class="modal-body">
        
        <div class="d-block mx-auto text-center w-50">

            <!-- Usuário -->
            <div class="input-group">
                <div class="input-group-prepend text-center">
                    <span class="input-group-text span-login p-2 border-0 rounded shadow">
                        <i class="fa-solid fa-user fa-size text-light" aria-hidden="true"></i>
                    </span>
                </div>
                <input class="form-control" type="text" id="user_cad" placeholder="Usuário"/>
            </div>

            <!-- Email -->
            <div class="input-group mt-1">
                <div class="input-group-prepend text-center">
                    <span class="input-group-text span-login p-2 border-0 rounded shadow">
                        <i class="fa-solid fa-envelope fa-size text-light" aria-hidden="true"></i>
                    </span>
                </div>
                <input class="form-control" type="text" id="email_cad" placeholder="Email"/>
            </div>

            <!-- Password -->
            <div class="input-group mt-1">
                <div class="input-group-prepend text-center">
                    <span class="input-group-text span-login p-2 border-0 rounded shadow">
                        <i class="fa-solid fa-key fa-size text-light" aria-hidden="true"></i>
                    </span>
                </div>
                <input class="form-control" type="password" id="pass_cad" placeholder="Senha"/>
            </div>

            <!-- Password Confirmação -->
            <div class="input-group mt-1">
                <div class="input-group-prepend text-center">
                    <span class="input-group-text span-login p-2 border-0 rounded shadow">
                        <i class="fa-solid fa-key fa-size text-light" aria-hidden="true"></i>
                    </span>
                </div>
                <input class="form-control" type="password" id="pass_cad_t" placeholder="Confirme a Senha"/>
            </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-cadastro span-login mt-2 p-2 btn rounded shadow text-light">
            <i class="fa-regular fa-circle-check fa-2x text-light" aria-hidden="true"></i>
        </button>
        <button type="button" class="btn btn-fechar mt-2 p-2 rounded shadow text-light" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa-regular fa-circle-xmark fa-2x text-light" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal de Cadastro -->
<a href="#" class="a-cad" data-bs-toggle="modal" data-bs-target="#cadastroModal">Não possui conta? <br>Cadastre-se agora!</a>
</div>

<script src="App/Public/js/project/login.js?v=<?php echo time();?>"></script>
</body>
</html>