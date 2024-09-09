<?php 

    class Cachorro {
        
        public $raca;
        public $nome;

        function __construct($raca, $nome) {
            $this->raca = $raca;
            $this->nome = $nome;
        }
    }

    $dog = new Cachorro("pitbul", "Tobi");

    echo "O nome do cachrro é $dog->nome e sua raça é $dog->raca \n";

    // poderia criar um public function tambem e ponhar o que esta escrito acimaaa;