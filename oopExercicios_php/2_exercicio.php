<?php
    class Pessoa {

        public $Nome_Pessoa;
        public $idade;
        public $dia_nascimento;
        public $mes_nascimento;
        public $ano_nascimento;

        function __construct($Nome_Pessoa, $idade, $dia_nascimento, $mes_nascimento, $ano_nascimento) {
        $this->Nome_Pessoa = $Nome_Pessoa;
        $this->idade = $idade;
        $this->dia_nascimento = $dia_nascimento;
        $this->mes_nascimento = $mes_nascimento;
        $this->ano_nascimento = $ano_nascimento;                
        }

    }

    class Universidade extends Pessoa {
        public $nome_Univ;

        public function chamarNome( $nome_Univ) {
           return $this->nome_Univ = $nome_Univ;
        }
    }

    $pessoa1 = new Universidade("Jeferson", 20, 5, 3, 2004);
    $pessoa1->chamarNome("Uniguairaca");
    echo "O {$pessoa1->Nome_Pessoa}, {$pessoa1->idade} anos, nascido em: {$pessoa1->dia_nascimento}/{$pessoa1->mes_nascimento}/{$pessoa1->ano_nascimento} \n";
    echo "Estuda na ". $pessoa1->nome_Univ. "\n";



    $pessoa2 = new Universidade("Ana Maria", 33, 2, 8, 1994);
    $pessoa2->chamarNome("Campo Real");
    echo "A {$pessoa2->Nome_Pessoa}, {$pessoa2->idade} anos, nascido em: {$pessoa2->dia_nascimento}/{$pessoa2->mes_nascimento}/{$pessoa2->ano_nascimento} \n";
    echo "Estuda na ". $pessoa2->nome_Univ;
    
   
