<?php

    // CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO
    $j = 0;
    $nome = "Matheus";

    for($i = 0; $i < 10; $i++) {

        if ($i == 4) {
            echo "$nome \n";
        }

        if($i == 8 ){
            break;
        }

        echo "Testando for $i \n";
    }