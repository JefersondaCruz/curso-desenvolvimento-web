<?php 

    class Pessoa2 {

        public $Nome_Pessoa;
        public $idade;
        public $dia_nascimento;
        public $mes_nascimento;
        public $ano_nascimento;

        public function calculaIdade() {
            $this->ano_nascimento;
            return "Idade: " .  2024 - $this->ano_nascimento  . " anos \n";
            
        }

        public function informarIdade() {
            return $this->calculaIdade();
        }

        public function informaNome() {
            $this->Nome_Pessoa;
            return  "Nome: " . $this->Nome_Pessoa;

        }

        public function ajustaDataDeNascimento() {
            $this->dia_nascimento;
            $this->mes_nascimento;
            $this->ano_nascimento;

            return "{$this->dia_nascimento} / {$this->mes_nascimento} / {$this->ano_nascimento} \n"; 
        }

    }

        $pessoa1 = new Pessoa2();
        $pessoa1->Nome_Pessoa = readline("Digite o nome da pessoa: ");
        $pessoa1->dia_nascimento = readline("Digite o seu dia de nascimento: ");
        $pessoa1->mes_nascimento = readline("Digite o seu mes de nascimento: ");
        $pessoa1->ano_nascimento = readline("Digite seu ano de nascimento: ");

        echo $pessoa1->calculaIdade();
        echo $pessoa1->informaNome() . "\n";
        echo $pessoa1->ajustaDataDeNascimento() . "\n";



        
