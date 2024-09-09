<?php

    $pessoa = new class() {

        public $nome = "Mathus";

        public function dizerNome() {
            echo "Olá meu nome é $this->nome \n";

        }

    };

    echo $pessoa->nome;

    $pessoa->dizerNome();