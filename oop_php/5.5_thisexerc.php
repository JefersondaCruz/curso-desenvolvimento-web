<?php 

    class Car {

        public $cor;
        public $tetoSolar;
        public $velocidade_maxima;

        function setVelocidadeMax($vel) {
            $this->velocidade_maxima = $vel;
        }

        function getVelocidadeMaxima() {
            echo "A velocidade máxima deste carro é: $this->velocidade_maxima km/h \n ";

        }



    }

    $bmw = new Car;

    $bmw->cor = "Branca";
    $tetoSolar = true;

    $bmw->setVelocidadeMax(200);

    $bmw->getVelocidadeMaxima();

    $ferrari = new Car;

    $ferrari->setVelocidadeMax(300);

    $ferrari->getVelocidadeMaxima();