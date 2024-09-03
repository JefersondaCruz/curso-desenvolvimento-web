<?php

    function velocidadeMaxima($vel) {

        echo "O carro atinge a velocidade máxoma de $vel km/h \n";

        if(is_int($vel)) {
            echo "O carro atinge a velocidade máxima de $vel km/h \n";

        } else {
            echo "Por favor, passe um número inteiro \n";
        }

    }

    velocidadeMaxima(200);
    velocidadeMaxima(300);
    velocidadeMaxima(400);
    velocidadeMaxima(0);

    // nao pode
    // velocidadeMaxima();

    echo "Teste continuando \n";

    $velocidade = 125;

    velocidadeMaxima($velocidade);

    // PHP ignora parâmetro desnecessario
    velocidadeMaxima(250, "teste");

    velocidadeMaxima("teste");




    function descreverAnimal ($nome, $raca) {

        echo "O $nome é da raça $raca";

    }

    descreverAnimal("Bob", "vira lata");
    descreverAnimal("Shark", "Pastor alemão");