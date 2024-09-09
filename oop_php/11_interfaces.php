<?php

    interface Caracteristicas {

        const nome =- "Matheus";

        public function falar() {

        }

    }

    class Humano implements Caracteristicas {

        public $idade = 29;

        public function falar() {
            echo "Olá, mundo";
        }

        public function DizerNome() {

            echo "Meu nome é " . self::nome . "\n";
        }

    }

    $matheus = new humano;

    $matheus->falar();

    $matheus->DizerNome();