<?php

    abstract class Teste {

        public static function testandoClasse() {
            echo "Este método é de uma classe abstrata \n";
            
        }

        abstract public function testeAbs();

    }

    // $t = new Teste;

    Teste::testandoClasse();

    class Nova extends Teste {
        
        public function testeAbs(){
            echo "Teste método abstrato \n";
        }
    }

    $n = new Nova;
    $n->testeAbs();