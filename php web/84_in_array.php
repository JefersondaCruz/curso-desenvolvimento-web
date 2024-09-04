<?php 

    $arr = ['banana', 'maça', 'batata', 'pera', 'mamão'];

    if (in_array("batata", $arr)) {
        echo "Há o item batata no array \n";
    } else {
        echo "Não há batata no array";
    }

    $b = "banana";

    if (in_array("$b", $arr)) {
        echo "Há o item batata no array \n";
    } else {
        echo "Não há batata no array";
    }

    if (in_array("teste", $arr)) {
        echo "Há o item teste no array \n";
    } else {
        echo "Não há teste no array";
    }