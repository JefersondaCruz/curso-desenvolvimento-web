<?php

    class Objeto {
        public $largura;
        public $altura;

        public function __construct($largura, $altura) {
            $this->largura = $largura;
            $this->altura = $altura;
        }

        public function calculaArea() {
            return $this->largura * $this->altura; 
        }
    }

    class triangulo extends Objeto {
        public $tipo;
        public function __construct($largura, $altura) {
            parent::__construct($largura, $altura);
        }

        public function calculaArea() {
            return $this->largura * $this->altura; 
        }


    }

    class retangulo extends Objeto {

        public function __construct($largura, $altura) {
            parent::__construct($largura, $altura);
        }

        public function calculaArea() {
            return $this->largura * $this->altura; 
        }

        public function ehQuadrado() {
            if ($this->largura === $this->altura){
                echo " É quadrado";
            } else {
                echo " Não é quadrado";
            }
        }
    }

    $triangulo = new triangulo(2, 3);
    echo "A Área do Triangulo:" . $triangulo->calculaArea();

    $retangulo = new retangulo(5, 5);
    echo " \n A Área do Retangulo:" . $retangulo->calculaArea();
    echo $retangulo->ehQuadrado();