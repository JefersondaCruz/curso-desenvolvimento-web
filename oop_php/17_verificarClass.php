<?php

    class Humano {

        public $idade;
        public $nome;
        public $profissao;

        public function falar() {}
        public function andar() {}

    }

    if(class_exists("Humano")) {
        echo "A classe existe \n";
    }

    if(class_exists("cachorro")) {
        echo "A classe existe \n";
    } else {
        echo "A classe não existe";
    }

    print_r(get_class_vars("Humano"));
    print_r(get_class_methods("Humano"));
    