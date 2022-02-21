<?php

declare(strict_types=1);

class Venda{
    private string $data;    
    private string $produto;    
    private int $quantidade;    
    private float $preco;    
    private float $valorTotal;    

    public function __construct(
        string $data, 
        string $produto, 
        float $preco
    ){
        $this->data = $data;
        $this->produto = $produto;
        $this->preco = $preco;
    }

    public function compra(
        int $quantidade
    ): string{
        $valorTotal = $quantidade * $this->preco;
        return "Compra realizada com sucesso! \n" . 
        'Produto: ' . $this->produto . "\n" .
        'Qtde: ' . $quantidade .
        ' por R$ ' . $valorTotal;
    }
}

$venda = new Venda(
    '12/02/2022', 
    'Camiseta Esportiva Adidas',
    159.99
);
echo $venda->compra(3);