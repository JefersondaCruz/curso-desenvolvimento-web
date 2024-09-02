<?php
    // condição verdadeira
    if (5 > 2) {    

        echo "Deu certo! entrou no if \n";
    }

    // condição falsa 
    if(2 >= 5) {

        echo "Não vai entrar no IF, porque deu false \n";
    }

    // utilizar operador logico

    if(10 === 10 && 9 > 3) {

        echo "Deu certo! entrou no if 2 \n";
    }

    // variaveis
    $a = 10;
    $b = 5;
    $c = "Deu certo, entrou no if 3 \n";

    if($a >= $b) {
        echo $c;
    }