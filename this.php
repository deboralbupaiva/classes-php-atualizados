<?php

require_once "src/Classes/Cliente.php";

$cli = new Cliente;
$cli->nome = "João";
$cli->idade = 40;
$cli ->endereco = "Rua A, 123";
$cli ->telefone = "(41) 99999-9999";

$cli ->comprar();
echo "<br>";

$cli2 = new Cliente;
$cli2 ->definirNome("Maria");
$cli2 ->idade = 30;
$cli2 ->endereco = "Rua B, 456";
$cli2 ->telefone = "(41) 88888-8888";
$cli2 ->comprar();
