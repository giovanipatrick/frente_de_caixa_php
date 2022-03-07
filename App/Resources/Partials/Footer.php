<?php

namespace App\Resources\Partials;
use App\Interfaces\PartialsInterface;

/*
    Metódo estático para inclusão do Parcial Footer
*/
    class Footer implements PartialsInterface{

        public static function include($params = null){
            ?>
    <footer class="footer text-light mx-auto text-center">
        &copy; Todos os Direitos Reservados - Frente de Caixa PHP LTDA.
    </footer>
    </body>
    </html>
            <?php
        }

    }
?>