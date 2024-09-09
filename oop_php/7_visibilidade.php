<?php 

    class Car {

        public $rodas = 4;
        private $vidro = "Sem película";
        protected $portas = 4;

        public function getVidro() {
            return $this->vidro;
        }

        public function getPortas() {
            return $this->portas;
        }

    }

    class Mecanico {

        public function alterarRodas($carro) {
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula) {
            $carro->vidro = $pelicula;
        }    
    }

    $carro = new Car;

    echo $carro->rodas . "\n";

    $matheus = new Mecanico;

    $matheus->alterarRodas($carro);

    echo $carro->rodas . "\n";


    // Não pode alterar pq é privado
    // $matheus->colocarPelicula($carro, "G20");

    // $matheus->colocarPelicula($carro, "G10");

    echo $carro->getVidro() . "\n";

    echo $carro->vidro = "teste";

    echo $carro->getPortas() . "\n";