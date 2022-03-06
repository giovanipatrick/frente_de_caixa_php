<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frente de Caixa - Project</title>
    <link rel="stylesheet" href="/App/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/App/Public/css/all.min.css">
    <link rel="stylesheet" href="/App/Public/css/project/login.css?v=<?php echo time();?>">
    <script src="/App/Public/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<form class="div-login mx-auto text-center shadow-lg p-4 border border-secondary rounded" action="javascript:void(0);">

<div id="logo">
    <img src="/App/Public/images/pdv_logo.png" class="img-fluid">
</div>

<div class="input-group mt-4">
    <div class="input-group-prepend text-center">
        <span class="input-group-text span-login p-2 border-0 rounded shadow">
        <i class="fa-solid fa-user fa-size text-light" aria-hidden="true"></i>
        </span>
    </div>
    <input type="text" id="usuario" class="form-control" placeholder="Digite o usuário..." required/>
</div>

<div class="input-group mt-1">
    <div class="input-group-prepend text-center">
        <span class="input-group-text span-login p-2 border-0 rounded shadow">
        <i class="fa-solid fa-key fa-size text-light" aria-hidden="true"></i>
        </span>
    </div>
    <input type="password" id="senha" class="form-control" placeholder="Digite a senha..." required/>
</div>

<button type="submit" class="btn-login mt-2 p-2 btn rounded shadow text-light">
        <i class="fa-solid fa-arrow-right-to-bracket fa-2x text-light" aria-hidden="true"></i>
</button>

<hr>

<a href="#" class="a-cad" data-bs-toggle="modal" data-bs-target="#cadastroModal">Não possui conta? <br>Cadastre-se agora!</a>
</form>

<!-- Modal de Cadastro -->
<div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title mx-auto text-center" id="cadastroModalLabel">
            <img src="/App/Public/images/pdv_cade.png" class="img-fluid" id="img-cad">
        </div>
      </div>
      <div class="modal-body">
        
        <form class="d-block mx-auto text-center w-50" action="javascript:void(0);">

            <!-- Usuário -->
            <div class="input-group">
                <div class="input-group-prepend text-center">
                    <span class="input-group-text span-login p-2 border-0 rounded shadow">
                        <i class="fa-solid fa-user fa-size text-light" aria-hidden="true"></i>
                    </span>
                </div>
                <input class="form-control" type="text" id="user_cad" placeholder="Usuário" required/>
            </div>

            <!-- Email -->
            <div class="input-group mt-1">
                <div class="input-group-prepend text-center">
                    <span class="input-group-text span-login p-2 border-0 rounded shadow">
                        <i class="fa-solid fa-envelope fa-size text-light" aria-hidden="true"></i>
                    </span>
                </div>
                <input class="form-control" type="email" id="email_cad" placeholder="Email" required/>
            </div>

            <!-- Password -->
            <div class="input-group mt-1">
                <div class="input-group-prepend text-center">
                    <span class="input-group-text span-login p-2 border-0 rounded shadow">
                        <i class="fa-solid fa-key fa-size text-light" aria-hidden="true"></i>
                    </span>
                </div>
                <input class="form-control" type="password" id="pass_cad" placeholder="Senha" required/>
            </div>

            <!-- Password Confirmação -->
            <div class="input-group mt-1">
                <div class="input-group-prepend text-center">
                    <span class="input-group-text span-login p-2 border-0 rounded shadow">
                        <i class="fa-solid fa-key fa-size text-light" aria-hidden="true"></i>
                    </span>
                </div>
                <input class="form-control" type="password" id="pass_cad_t" placeholder="Confirme a Senha" required/>
            </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-cadastro span-login mt-2 p-2 btn rounded shadow text-light">
            <i class="fa-regular fa-circle-check fa-2x text-light" aria-hidden="true"></i>
        </button>
        <button type="button" class="btn btn-fechar mt-2 p-2 rounded shadow text-light" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa-regular fa-circle-xmark fa-2x text-light" aria-hidden="true"></i>
        </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal de Cadastro -->

<script src="/App/Public/js/project/login.js?v=<?php echo time();?>"></script>
</body>
</html>