<?php

    $a = true;

    if(is_bool($a)){
        echo "E um booleano \n";
    }

    if(is_bool(0)){
        echo "E um booleano 2 \n";
    }

    if(is_bool(false)){
        echo "E um booleano 3 \n";
    }

    if(0 == false) {
        echo "0 é considerado Falso! \n";
    }