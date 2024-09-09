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
            
        
        }
    }

    