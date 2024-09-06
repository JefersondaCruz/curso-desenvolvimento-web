<?php

    class Cachorro {

        function latir () {
            echo "au au au au \n";
        }

        function andar($m) {
            echo "cachorro andou $m mestros \n";
        }

    }

    $bulldog = new Cachorro;
    $pitchbull = new Cachorro;

    $bulldog->latir();
    $bulldog->andar(6);

    $pitchbull->latir();
    $pitchbull->andar(15);


