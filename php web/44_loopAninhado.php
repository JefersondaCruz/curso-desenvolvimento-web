<?php

    $i = 1;

    $c = "Variavel teste";

    while ($i <= 10) {

        echo "Loop externo" . $i . "\n";

        // Segundo Contador
        $j =1;

        echo "$c \n";

        while ($j <= 5 ) {

            echo "Loop interno $j \n";

            echo "$c 2 \n";

            $j++;
        }


        $i++;   
    }