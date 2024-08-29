<?php

    $x = 10;

    $y =& $x;

    echo "$x \n";
    echo "$y \n";

    $y = 15;

    echo "Atribuição após ref \n";
    echo "$x \n";
    echo "$y \n";

    $x = 20;

    echo "Atribuição após ref 2\n";
    echo "$x \n";
    echo "$y \n";

    $nome = "matheus";

    $nome2 =& $nome;

    echo "$nome\n";
    echo "$nome2 \n";
    

    $nome2 = "joao";

    echo "$nome\n";
    echo "$nome2 \n";