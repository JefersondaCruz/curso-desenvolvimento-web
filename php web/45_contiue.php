<?php

    $a = 10;

    while ($a > 0 ) {


        if ($a == 5 || $a == 7 ) {

            echo "Pulou a execução $a \n";

            $a--;

            continue;

        }

        if ($a == 2) {

            echo "Terminando o loop break $a\n";
            
            break;
        }

        echo "Executando o loop $a \n ";

        $a--;

    }