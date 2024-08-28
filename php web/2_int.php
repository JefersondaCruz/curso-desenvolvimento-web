<?php


    if (is_int(5)){ // true
        echo "É um inteiro \n"; 
    }

    if (is_int("Não é um inteiro")){ // false
        echo "É um inteiro \n"; 
    }


    $a = 10;


    if (is_int($a)){ // true
        echo "É um inteiro 3 \n"; 
    }