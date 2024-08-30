<?php

    echo 5 / 2;
    echo "\n";

    
    if(is_float(5/2)) {
        echo "É float \n";
    }

    echo 2 . 3;
    echo "\n";

    if(is_string(2.3)) {
        echo "É string \n";
    }

    $nome = "Matheus";
    $sobrenome = "battisti";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto.PHP_EOL;