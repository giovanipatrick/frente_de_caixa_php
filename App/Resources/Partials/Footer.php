<?php

namespace App\Resources\Partials;
use App\Interfaces\PartialsInterface;

/*
    Metódo estático para inclusão do Parcial Footer
*/
    class Footer implements PartialsInterface{

        public static function include($params = null){
            ?>
    </body>
    </html>
            <?php
        }

    }
?>