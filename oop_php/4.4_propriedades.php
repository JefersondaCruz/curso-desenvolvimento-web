<?php 

    class Pessoa {

        public $nome = "Matheus";
        public $idade = 29;
        
        function andar($m) {

            echo "andou $m metros \n";

        }

    }

    $homem_1 = new Pessoa;

    echo $homem_1->nome . "\n";
    echo $homem_1->idade . "\n";
    $homem_1->andar(4);

    $joaquim = new Pessoa;

    $joaquim->nome = "Joaquim";
    $joaquim->idade = 17;

    echo "O nome dele é $joaquim->nome e sua idade é $joaquim->idade \n";

    $joaquim->andar(14);