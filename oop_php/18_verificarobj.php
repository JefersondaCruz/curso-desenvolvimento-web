<?php

    class Humano {

        public function falar() {
            echo "ola";
        }

    }

    $matheus = new Humano;
    $teste = 10;

    if(is_object($matheus)) {
        echo "É um objeto \n";
    } else {
        echo "Não é um objeto \n";
    }

    if(is_object($teste)) {
        echo "É um objeto \n";
    } else {
        echo "Não é um objeto \n";
    }

    echo get_class($matheus) . "\n";

    if(method_exists($matheus, "falar")) {
        echo "método existe \n";
    } else {
        echo "Método nao existe \n";
    }

    if(method_exists($matheus, "asd")) {
        echo "método existe \n";
    } else {
        echo "Método nao existe \n";
    }