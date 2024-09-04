<?php

    $str = "Está é a minha string";

    $minha = substr($str, 10, 5); // STRING PAI, INDICE INICIAL, COMPRIMENTO DA PALAVRAS

    echo $str . "\n";
    echo "$minha \n";

    $str2 = "Testando esta string abc";

    $novaString = substr($str2, 8); // Omitir comprimento = pegar ate o fim

    echo $novaString . "\n";

    $novaString2 = substr($str2, 8, -3); // Comprimento negativo = remover do ultimo indice

    echo $novaString2 . "\n";