<?php

    class Car {

        public $rodas;
        public $aro = 20;
        public $cor = "Vermelha";

        function ligar() {

            echo "Vrummmm \n ";

        }
    }

    $ferrai = new Car;

    $ferrai->rodas = 4;

    echo $ferrai->aro . "\n";
    echo $ferrai->rodas . "\n";

    $ferrai->cor = "Azul";
    echo $ferrai->cor . "\n";

    $ferrai->ligar();
