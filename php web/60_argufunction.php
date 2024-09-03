<?php

    function soma($a, $b) {

        print_r(func_get_args());
        echo "\n";

        echo func_num_args() . "\n";

        return $a + $b;

    }

    soma(2, 4);