<?php

    class Pessoa {

        public $nome;

        function falar() {
            echo "Olá pessoal";
        }


    }

    $matheus = new Pessoa();

    $matheus->nome = "matheus";

    echo $matheus->nome;

    $matheus->Falar();
