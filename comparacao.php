<?php
require_once "src/Classes/Produto.php";

$prod1 =  new Produto;
$prod1 ->titulo = "Fanta uva";
$prod1 ->descricao = "Refrigerante 350ml";
$prod1 ->preco = 3.50;

$prod2 =  new Produto;
$prod2 ->titulo = "Fanta uva";
$prod2 ->descricao = "Refrigerante 350ml";
$prod2 ->preco = 3.50;

var_dump($prod1 == $prod2); //Tipo e propriedade
echo "<br>";
var_dump($prod1 === $prod2);// referência !==
echo "<br>";

$prod3 =  new Produto;
$prod3 ->titulo = "Fanta uva";
$prod3 ->descricao = "Refrigerante 350ml";
$prod3 ->preco = 3.50;
var_dump($prod1 == $prod2);
$prod4 = $prod1;
echo "<br>";
var_dump($prod1 === $prod4);
