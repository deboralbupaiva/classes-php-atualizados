<?php

class Cliente
{
    public $nome;
    public $idade;
    public $endereco;
    public $telefone;

    function comprar(){
        echo "O cliente {$this->nome} realizou uma compra";
    }
    function definirNome($nome){
        $this -> nome = $nome;
    }
}