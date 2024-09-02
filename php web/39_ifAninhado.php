<?php 

    if (10 > 2) {

        echo "Entrou no primeiro if \n";
        
        if("teste" === "teste") {

            echo "Entrou no segundo if \n";

        }

    }

    if (10 > 2) {

        echo "Entrou no primeiro if 2 \n";
        
        if("teste" != "teste") {

            echo "Entrou no segundo if  2\n";

        } else {

            echo "Entrou no segundo else 2 \n";

        }

    }

    if (10 < 2) {

        echo "Entrou no primeiro if 2 \n";
        
        if("teste" != "teste") {

            echo "Entrou no segundo if  2\n";

        } else {

            echo "Entrou no segundo else 2 \n";

        }

    } else {

        echo "Entrou no primeiro else \n";

    }


    $escopo = 10;
    
    if (10 > 2) {

        echo "Entrou no primeiro if 2 \n";
        
        if("teste" == "teste") {

            echo "Entrou no segundo if  2 \n";

            echo $escopo;

        } else {

            echo "Entrou no segundo else 2 \n";

        }

    } else {

        echo "Entrou no primeiro else \n";

    }