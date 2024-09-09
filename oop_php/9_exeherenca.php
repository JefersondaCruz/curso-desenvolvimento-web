<?php

    class Humano {

        public $maos = 2;
        public $pernas = 2;

        public function falar() {
            echo "Ola, eu sou um humano \n";
        }

    }

    class Professor extends Humano {

        public $disciplina = "matematica";

        public function estalecionando() {
            echo "O professor esta dando aula de $this->disciplina \n";
        }

    }

    $marcos = new humano;

    echo "$marcos->maos \n";
    $marcos->falar();

    $joao = new professor;

    echo "$joao->pernas \n";
    echo "$joao->disciplina \n";

    $joao->falar();

    $joao->estalecionando();