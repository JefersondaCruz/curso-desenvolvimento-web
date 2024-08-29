<?php

    $x = 10;

    echo "$x global \n";

    function teste() {

        $x = 5;

        echo "$x Local \n";

    }

    teste();

    echo "$x global \n";

    teste();

    function testando() {

        $x = 12;

        echo "$x local 2 \n";

    }

    $x = 99;

    testando();

    teste();

    echo "$x global \n";