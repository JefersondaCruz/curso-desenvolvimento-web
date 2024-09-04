<?php

    $arr = [
        'cor' => 'vermelho',
        'forma' => 'retangular',
        'material' => 'aço'
    ];

    extract($arr);

    echo "$cor \n";
    echo "$forma \n";
    echo "$material \n";

    $nome = "Matheus";

    $pessoa = [
        'nome' => 'joão',
        'idade' => 29
    ];

    echo "$nome \n";

    extract($pessoa);

    echo "$nome \n";
    echo "$idade \n";
