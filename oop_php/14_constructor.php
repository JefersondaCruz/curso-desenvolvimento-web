<?php

    class Car {
        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca) {

            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;  
    
    
        }

    }


    

    $ferrari = new Car(4, "Vermelha", "ferrari");

    echo " O carro é da marca $ferrari->marca e tem a cor $ferrari->cor e tem $ferrari->portas portas";

    $BMW = new Car(4, "Verde", "BMW");

    echo " O carro é da marca $BMW->marca e tem a cor $BMW->cor e tem $BMW->portas portas";