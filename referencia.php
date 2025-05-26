<?php
require_once "src/Classes/Produto.php";

$prod1 =  new Produto;
$prod1 ->titulo = "Fanta uva";
$prod1 ->descricao = "Refrigerante 350ml";
$prod1 ->preco = 3.50;

$prod2 = $prod1;
$prod2 ->preco = 3.40;
var_dump($prod2);
echo"<br>";

function alterarProduto($produto)
{
    $produto -> titulo = "Skol Litrão";
}

alterarProduto($prod1);
var_dump($prod1);
echo"<br>";
var_dump($prod2);
