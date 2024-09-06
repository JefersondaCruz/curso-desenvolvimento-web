<?php 

    class Animal {

        public $nome;

        function escolherNome($nome) {
            $this->nome = $nome;
        }

        function latir() {
            return "Au au \n";
        }

        function latirForte() {
            return strtoupper($this->latir());
        }


    }

    $frida = new Animal;

    echo "O nome do animal é: $frida->nome \n";

    $frida->escolherNome("frida");

    echo "O nome do animal é: $frida->nome \n";

    echo $frida->latir();
    
    echo $frida->latirForte();