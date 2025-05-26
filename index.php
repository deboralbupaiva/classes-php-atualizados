<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";


$prod1 =  new Produto;
$prod1 ->titulo = "Fanta uva";
$prod1 ->descricao = "Refrigerante 350ml";
$prod1 ->preco = 3.50;

$prod2 = new Produto;
$prod2 ->titulo = "Chetoos";
$prod2 ->descricao = "Salgadinho";
$prod2 ->preco = 14.00;

var_dump($prod1);
echo "<br>";
var_dump($prod2);
echo "<br>";

$cli = new Cliente;
$cli ->nome = "Nathan";
$cli ->idade = 27;
$cli ->endereco = "Rua A, 123";
$cli ->telefone = "(41)XXXX-XXXX";
$cli ->comprar();

$nomeClasse = "Produto";
$instacia = new $nomeClasse;
var_dump($instacia);

$cli2 = new $cli1;
$nomeClasse2 = get_class($cli);
$cli3 - new $nomeClasse2;
$cli3 ->nome = "Maria";
var_dump($cli);
echo "<br>";
var_dump($cli2);
echo "<br>";
var_dump($cli3);
echo "<br>";
