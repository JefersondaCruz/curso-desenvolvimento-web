<?php

    class Humano {



    }

    class Animal {


    }

    class Professor extends Humano {

    }

    $marcos = new Humano;

    $turca = new Animal;

    if ($marcos instanceof Humano) {
        echo "Marcos é um Humano \n";
    } else {
        echo "Marcos não é um humano \n";
    }

    if ($turca instanceof Humano) {
        echo "Turca é um Humano \n";
    } else {
        echo "A turca não é um humano \n";
    }

    $pedro = new Professor;

    if ($pedro instanceof Professor) {
        echo "Pedro é um Professor \n";
    } else {
        echo "A pedro não é um Professor \n";
    }

    if ($pedro instanceof Humano) {
        echo "Pedro é um Humano \n";
    } else {
        echo "A pedro não é um humano \n";
    }

    if ($turca instanceof Professor) {
        echo "Turca é um professor \n";
    } else {
        echo "A turca não é um professor \n";
    }