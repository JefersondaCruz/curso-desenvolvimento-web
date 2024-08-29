<?php 

    $teste = "asd";

    echo "$teste global 1 \n";

    if(5 > 2) {

        $teste = "dsa";

        echo "$teste if \n";

    }

    echo "$teste global 2 \n";

    function funcao () {

        $teste = "xsxs";

        echo "$teste local \n";

    }

    funcao();

    function testandoGlobal() {

        global $teste;

        $teste = 2;

        echo "$teste global função \n";

    }

    testandoGlobal();

    echo "$teste global 3 \n";