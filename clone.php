<?php
require_once "src/Classes/Produto.php";

$prod1 =  new Produto;
$prod1 ->titulo = "Fanta uva";
$prod1 ->descricao = "Refrigerante 350ml";
$prod1 ->preco = 3.50;

$prod2 = clone $prod1;
$prod2 ->preco = 3.40;

function alterarProduto($produto)
{
    $produto -> titulo = "Skol Litrão";
    return $produto;
}
$prod3 = alterarProduto(clone $prod1);
var_dump($prod1);
var_dump($prod2);
var_dump($prod3);
