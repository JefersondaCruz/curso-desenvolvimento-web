<?php

    class Humano {

        public $idade = 29;

        public function falar() {
            echo "Ola, Mundo";
        }

        private function gritar() {
            echo "PHP É MUITO BOM";
        }

        public function acessaGritar() {
            $this->gritar();
        }

        protected function falarBaixinho() {
            echo" lalala \n";
        }

        public function acessaFalarBaixinho() {
            $this->falarBaixinho();
        }

    }

    class programador extends Humano {

        public function acessaFalarBaixinhoProgramador() {
            $this->falarBaixinho();
        }

    }

    $ze = new Humano;
    $ze->falar();
    $ze->acessaGritar();
    $ze->acessaFalarBaixinho();


    $matheus = new programador();

    echo $matheus->idade . "\n";

    $matheus->falar();
    $matheus->acessaGritar();
    $matheus->acessaFalarBaixinhoProgramador();