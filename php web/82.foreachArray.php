<?php 

    $matheus = [
        'nome' => 'Matheus',
        'idade' => 29,
        'profissao' => 'programador'
    ];


    $alexia = [
        'nome' => 'Alexia',
        'idade' => 25,
        'profissao' => 'eng. Civil'
    ];

    foreach($matheus as $carac => $value) {

        echo "$carac => $value \n";

    }

    foreach($alexia as $carac => $value) {

        echo "$carac => $value \n";

    }