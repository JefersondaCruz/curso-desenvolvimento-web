<?php 

    $a = 1;
    $b = "1";

    if ($a != $b ) {
        echo "A é diferente de B 1  \n";
    }

    if ($a !== $b ) {
        echo "A é diferente de B 1  \n";
    }

    if (1 !== 2 ){
        echo "Não é idêntico 1 \n";
    }

    if (1 !== "1" ){
        echo "Não é idêntico 2 \n";
    }

    if ([] !== "abc" ){
        echo "Não é idêntico 3 \n";
    }