<?php 

    class Funcionario {
        public $id;
        public $nome;
        public $cargo;

        public function __construct ($id, $nome, $cargo) {
            $this->id = $id;
            $this->nome = $nome;
            $this->cargo = $cargo;

        }
        function calculaSalario() {
            $salario = 3000;
            echo "Salário de $this->nome Cargo: $this->cargo R$ $salario \n ";
        }

    }
    
    class gerente extends Funcionario{
        public $cargo;
        public $quantidade_colaboradores;

        public function __construct($id, $nome, $quantidade_colaboradores) {
            parent::__construct($id, $nome, "Gerente");
            $this->quantidade_colaboradores = $quantidade_colaboradores;
        }

        public function calculaSalario() {
            $salario = 6000;
            echo "Salário de $this->nome Cargo: $this->cargo R$ $salario \n";
        }
    }

$funcionario1 = new Funcionario(1, 'Mclovin', 'programador');
$funcionario1->calculaSalario();

$gerente1 = new Gerente(2, 'joelma faria', 10);
$gerente1->calculaSalario();