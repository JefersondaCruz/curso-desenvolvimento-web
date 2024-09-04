<?php 

    // RESGATAR ELEMENTOS DE ARAY
    // REMOVER ELEMENTOS

    $arr = [1, 2, 3, 4, 5, 6];

    $removidos = array_splice($arr, 1, 2);

    print_r($arr);
    echo "\n";

    print_r($removidos);
    echo "\n";

    $arr2 = [1, 2, 3, 4, 5, 6];

    $removidos2 = array_splice($arr2, 3);

    print_r($arr2);
    echo "\n";

    print_r($removidos2);
    echo "\n";