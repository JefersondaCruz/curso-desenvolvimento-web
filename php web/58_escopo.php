<?php

    $a = 10;

    $b = 15;

    function testeEscopo () {

        $a = 5;

        global $b;

        static $c = 0;

        $a++;

        $b++;

        $c++;
        
        echo "ESCOPO LOCAL DE A: $a  \n";

        echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b  \n";

        echo "ESCOPO STATIC DE C: $c  \n";

    }

    echo "ESCOPO GLOBAL DE A: $a \n";
    echo "ESCOPO GLOBAL DE B: $b  \n";

    testeEscopo();

    echo "ESCOPO LOCAL DE B: $b  \n";

    testeEscopo();
