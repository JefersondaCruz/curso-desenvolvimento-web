<?php

    $frase = "Testando o explode";

    $fraseArray = explode(" ", $frase);

    print_r($fraseArray);
    echo "\n";

    $fraseArray2 = explode(", ", $frase);

    print_r($fraseArray2);
    echo "\n";

    $fraseB = "Carro, Aviao, Barco, Navio";

    $fraseBArray = explode(", ", $fraseB);

    print_r($fraseBArray);
    echo "\n";

    for ($i = 0; $i < count($fraseBArray); $i++) {

        echo "$fraseBArray[$i] \n";

    }
