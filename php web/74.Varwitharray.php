<?php

    $pessoa = ["Matheus", 29, "programador", "verde"];

    print_r($pessoa);
    echo "\n";

    list($nome, $idade, $profissão, $cordosolhos) = $pessoa;

    echo "$nome \n";
    echo "$idade \n";
    echo "$profissão \n";
    echo "$cordosolhos \n";
    
