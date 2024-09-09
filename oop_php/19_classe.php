<div class="titulo">Primeira Class</div>

<?php 

    class Cliente {
        // atributos 
        public $nome = "Anônimo";
        public $idade = 18;

        public function apresentar() {
            return "Nome: {$this->nome} Idade: {$this->idade}";
        }
    }

    $c1 = new Cliente;
    echo $c1->nome . "\n";
    $c1->nome = "Ana Silva";
    echo $c1->nome . "\n";
    $c1->idade = 20;
    
    

    $c2 = new Cliente;
    $c2->nome = "Gabriel";
    $c2->idade = 43;

    echo $c1->apresentar() . "\n";
    echo $c2->apresentar() . "\n";

