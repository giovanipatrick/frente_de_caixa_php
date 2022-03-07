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
                <a href="#">Funcionários</a>
            </li>
            <li>
                <a href="#">Clientes</a>
            </li>
            <li>
                <a href="#">Produtos</a>
            </li>
            <li>
                <a href="#">Classificações</a>
            </li>
            <li>
                <a href="#">Relatórios Empresariais</a>
            </li>
        </ul>
    </div>

    <div id="gestao_financeira" class="mt-5 p-5 text-start shadow ms-4 d-modulo">
        <img class="img-content img-fluid" src="/App/Public/svgs/project/pdv_fin.svg">
        <h5 class="title_modulo mt-3">Gestão Financeira</h5>
        <ul>
            <li>
                <a href="#">Frente de Caixa</a>
            </li>
            <li>
                <a href="#">Formas de Pagamento</a>
            </li>
            <li>
                <a href="#">Dashboard Financeira</a>
            </li>
            <li>
                <a href="#">Relatórios Financeiros</a>
            </li>
        </ul>
    </div>

    <div id="configuracoes_sistema" class="mt-5 p-5 text-start shadow ms-4 d-modulo">
        <img class="img-content img-fluid" src="/App/Public/svgs/project/pdv_conf.svg">
        <h5 class="title_modulo mt-3">Configurações do Sistema</h5>
        <ul>
            <li>
                <a href="#">Minha Conta</a>
            </li>
            <li>
                <a href="#">Minhas Preferências</a>
            </li>
            <li>
                <a href="#">Relatar um Problema</a>
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