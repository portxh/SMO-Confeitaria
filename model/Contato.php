<?php
class Contato
{
    //atributos da tabela usuário
    public $cod_contato;
    public $nome;
    public $email;
    public $assunto;
    public $mensagem;
    public $data;
    public $respondido;

    public function __construct() //será executado ao usar a classe
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("INSERT INTO contato (nome, email, assunto, mensagem, data) 
        VALUES (:nome, :email, :assunto, :mensagem, :data)");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":nome", $this->nome);
        $cmd->bindParam(":email", $this->email);
        $cmd->bindParam(":assunto", $this->assunto);
        $cmd->bindParam(":mensagem", $this->mensagem);
        $cmd->bindParam(":data", $this->data);
        //$cmd->bindParam(":respondido", $this->respondido);
        $cmd->execute(); //executar o comando
    }

    public function consultar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM contato"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM contato
        WHERE cod_contato = :cod_contato");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_contato",    $this->cod_contato);
        $cmd->execute(); //executar o comando
    }

    // Atualizar Mensagem
    public function atualizar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("UPDATE contato  SET
                                 nome   = :nome,
                                 email  = :email,
                                 assunto  = :assunto,
                                 mensagem  = :mensagem,
                                 data  = :data,
                                 respondido  = :respondido
                          WHERE cod_contato = :cod_contato");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_contato",      $this->cod_contato);
        $cmd->bindParam(":nome",     $this->nome);
        $cmd->bindParam(":email",     $this->email);
        $cmd->bindParam(":assunto",     $this->assunto);
        $cmd->bindParam(":mensagem",     $this->mensagem);
        $cmd->bindParam(":data",     $this->data);
        $cmd->bindParam(":respondido",     $this->respondido);
        $cmd->execute(); //executar o comando
    } 

    /* Atualizar status da mensagem
    public function atualizar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("UPDATE contato  SET
                                 respondido  = :respondido
                          WHERE cod_contato = :cod_contato");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_contato",      $this->cod_contato);
        $cmd->bindParam(":respondido",     $this->respondido);
        $cmd->execute(); //executar o comando


    }*/

    public function retornar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM contato
        WHERE cod_contato = :cod_contato"); //comando SQL
        $cmd->bindParam(":cod_contato", $this->cod_contato);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

}

?>