<?php 

    trait Objeto {

        public function teste() {
            echo "Testando trait de objeto \n";
        }
    }

    trait Testando {

        public $y = 10;

        public function TraitTeste() {
            echo "Este método é da trait Testando \n";
        }

    }


    class Central {

         use Objeto;
         use Testando;

    }

    $x = new Central;

    $x->teste();

    $x->traitTeste();   
    echo $x->$y . "\n";
    