<?php

class produto {
    public $nome_produto;
    public $preco_produto;
    public $qtd_produto;
    public $metodo_pag;

    public function __construct($nome_produto, $preco_produto, $qtd_produto, $metodo_pag) {
        $this->nome_produto = $nome_produto;
        $this->preco_produto = $preco_produto;  
        $this->qtd_produto = $qtd_produto;
        $this->metodo_pag = $metodo_pag;  
    }

    public function items1() {
        return "\n // PEDIDOS // \n Produto: $this->nome_produto \n Preço: R$$this->preco_produto  \n Quantidade: $this->qtd_produto \n Metodo de pagamento: $this->metodo_pag \n";
    }
}

$cliente1 = new produto("arroz", 15.99, "1kg", "Cartão");
echo $cliente1->items1();

$cliente2 = new produto("feijão", 15.99, "1kg", "Dinheiro");
echo $cliente2->items1();

$cliente3 = new produto("macarrão", 8.99, "250g", "Cheque");
echo $cliente3->items1();