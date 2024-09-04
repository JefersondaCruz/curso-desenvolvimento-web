<?php

    $arr = [
        [1, 2, 3],
        [2, 4, 6]
    ];

    print_r($arr);
    echo "\n";

    echo $arr[0][1] . "\n"; // acessadno primerio array, e segundo elemetnto
    echo $arr[1][2] . "\n"; // acessando o segundo array, e ultimo elemetno

    echo count($arr) . "\n";
    echo count($arr[0]) . "\n";