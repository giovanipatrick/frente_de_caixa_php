<?php
use App\Resources\Partials\Header;
use App\Resources\Partials\Footer;
Header::include();
?>

<!-- Modulos Disponíveis -->
<div class="d-flex justify-content-center mt-2 p-4 modulos_disp">

    <div id="gestao_empresarial" class="mt-5 p-5 text-start shadow d-modulo">
        <img class="img-content img-fluid" src="/App/Public/svgs/project/pdv_emp.svg">
        <h5 class="title_modulo mt-3">Gestão Empresarial</h5>
        <ul>
            <li>
                <a href="/funcionarios">Funcionários</a>
            </li>
            <li>
                <a href="/clientes">Clientes</a>
            </li>
            <li>
                <a href="/produtos">Produtos</a>
            </li>
            <li>
                <a href="/classificacoes">Classificações</a>
            </li>
            <li>
                <a href="/relatorios_empresariais">Relatórios Empresariais</a>
            </li>
        </ul>
    </div>

    <div id="gestao_financeira" class="mt-5 p-5 text-start shadow ms-4 d-modulo">
        <img class="img-content img-fluid" src="/App/Public/svgs/project/pdv_fin.svg">
        <h5 class="title_modulo mt-3">Gestão Financeira</h5>
        <ul>
            <li>
                <a href="/frente_de_caixa">Frente de Caixa</a>
            </li>
            <li>
                <a href="/formas_de_pagamento">Formas de Pagamento</a>
            </li>
            <li>
                <a href="/dashboard_financeira">Dashboard Financeira</a>
            </li>
            <li>
                <a href="/relatorios_financeiros">Relatórios Financeiros</a>
            </li>
        </ul>
    </div>

    <div id="configuracoes_sistema" class="mt-5 p-5 text-start shadow ms-4 d-modulo">
        <img class="img-content img-fluid" src="/App/Public/svgs/project/pdv_conf.svg">
        <h5 class="title_modulo mt-3">Configurações do Sistema</h5>
        <ul>
            <li>
                <a href="/minha_conta">Minha Conta</a>
            </li>
            <li>
                <a href="/minhas_preferencias">Minhas Preferências</a>
            </li>
            <li>
                <a href="/relatar_problema">Relatar um Problema</a>
            </li>
            <li>
                <a href="/deslogar">Sair</a>
            </li>
        </ul>
    </div>

</div>

<?php
Footer::include();
?>