<?php

class Pedidos{

    public $idPedido;
    public $cod_usuario;
    public $cpf;
    public $nome;
    public $celular;
    public $pedido;
    public $data;
    public $valorTotal;
    public $status;
    public $dataStatus;
    
    public function __construct() //será executado ao usar a classe
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar() {
        

        $con = Conexao::conectar(); //conectar no BD

        $cmd = $con->prepare("INSERT INTO pedidos (cpf, cod_usuario, nome, celular, pedido, data, valorTotal, status, dataStatus) 
        VALUES (:cpf, :cod_usuario, :nome, :celular, :pedido, :data, :valorTotal, :status, :dataStatus)");

        $cmd->bindParam(":cpf",         $this->cpf);
        $cmd->bindParam(":cod_usuario",         $this->cod_usuario);
        $cmd->bindParam(":nome",        $this->nome);
        $cmd->bindParam(":celular",        $this->celular);
        $cmd->bindParam(":pedido",      $this->pedido);
        $cmd->bindParam(":data",        $this->data);
        $cmd->bindParam(":valorTotal",  $this->valorTotal);
        $cmd->bindParam(":status",  $this->status);
        $cmd->bindParam(":dataStatus",  $this->dataStatus);
        $cmd->execute();

        
        
    }

    public function consultar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM pedidos"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function consultarMeuPedido()
    {
       $con = Conexao::conectar();//acessar o BD
       $cod_usuario = $_SESSION["sessao"]->cod_usuario;
       $cmd = $con->prepare("SELECT * FROM pedidos where cod_usuario =  $cod_usuario ORDER BY data DESC"); //comando SQL
       $cmd->execute();//executar o comando SQL
       return $cmd->fetchAll(PDO::FETCH_OBJ);
    }
    
    

    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM pedidos 
        WHERE idPedido = :idPedido");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":idPedido",    $this->idPedido);
        $cmd->execute(); //executar o comando
    }
    
    public function cancelar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("UPDATE pedidos SET status = :status, dataStatus  = :dataStatus WHERE idPedido = :idPedido");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":idPedido",    $this->idPedido);
        $cmd->bindParam(":status",  $this->status);
        $cmd->bindParam(":dataStatus",  $this->dataStatus);
        $cmd->execute(); //executar o comando
    }

    public function atualizar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("UPDATE pedidos SET
                                        
                                        status   = :status,
                                        dataStatus  = :dataStatus
                            WHERE idPedido = :idPedido");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":idPedido",      $this->idPedido);
        $cmd->bindParam(":status",  $this->status);
        $cmd->bindParam(":dataStatus",  $this->dataStatus);

        $cmd->execute(); //executar o comando
    }

    public function retornar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM pedidos
        WHERE idPedido = :idPedido"); //comando SQL
        $cmd->bindParam(":idPedido", $this->idPedido);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

    
}