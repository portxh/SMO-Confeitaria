<?php
include_once "model/Produtos.php";//incluir a model
include_once "model/Pedidos.php";//incluir a model
class HomeController
{
    public function abrirHome()
    {
        $produto = new Produtos();
        include_once "site/index.php";
    }

    public function abrirPrivacidade()
    {
        include_once "site/includes/politicas-privacidade.php";
    }

    public function abrirTermos()
    {
        include_once "site/includes/termos-uso.php";
    }

    public function abrirContato()
    {
        $produto = new Produtos();
    
        include_once "site/index.php";
    }
   
}

?>