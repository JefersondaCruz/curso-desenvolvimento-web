<?php

    class Pessoa {
        public $nome;
        public $idade;

        function __construct($novoNome, $idade) {
            Echo "Construtor invocado! \n";
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo "E morreu! \n";
        
        }

        public function apresentar() {
            echo "{$this->nome}, {$this->idade} anos \n";
        }
    }

     // $pessoa = new Pessoa(); // problema, precisa passar os valores entre aspas
    

    $pessoaA = new Pessoa("Rebeca Maria", 40);
    $pessoaA->apresentar();
    unset($pessoaA);

    $pessoaB = new Pessoa("Joao silva", 60);
    $pessoaB->apresentar();
    $pessoaB = null;


    
    
    

    