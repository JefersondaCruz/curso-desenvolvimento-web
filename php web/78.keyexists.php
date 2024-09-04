<?php

    $arr = [
        'nome' => 'Matheus',
        'idade' => 29
    ];

    if (array_key_exists("nome", $arr)) {

        echo "A chave existe! \n";

    } else {

        echo "A chave nao existe! \n";


    }

    if (array_key_exists("profissao", $arr)) {

        echo "A chave existe! \n";

    } else {

        echo "A chave nao existe! \n";

    }

    if(isset($arr['nome'])) {
        echo "A chave existe! \n";

    } else {

        echo "Achave nao existe! ISSET \n";

    }

    if(isset($arr['teste'])) {
        echo "A chave existe! \n";

    } else {

        echo "Achave nao existe! ISSET \n";

    }