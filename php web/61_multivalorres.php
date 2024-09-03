<?php

    function alteraDados($nome, $idade){

        $nome = "SR. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];

    }

    $dados = alteraDados("Matheus", 29);

    print_r($dados);

    echo "\n";

    echo "Ola $dados[0], você tem $dados [1]";