<?php
class Produtos
{
    //atributos da tabela usuário
    private $id;
    private $categoria;
    private $nome;
    private $descricao;
    private $data;
    private $imagem;
    private $preco;
  
    //get / set
    function __get($atributo)
    {
        return $this->$atributo;
    }
    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

 
    
    public function __construct() //será executado ao usar a classe
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)

        
        $cmd = $con->prepare("INSERT INTO produtos (categoria, nome, descricao, data, imagem, preco) 
        VALUES (:categoria,:nome,:descricao, :data, :imagem, :preco)");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":categoria",  $this->categoria);
        $cmd->bindParam(":nome",  $this->nome);
        $cmd->bindParam(":descricao", $this->descricao);
        $cmd->bindParam(":data", $this->data);
        $cmd->bindParam(":imagem", $this->imagem);
        $cmd->bindParam(":preco", $this->preco);
      

        $cmd->execute(); //executar o comando
    }

    public function consultar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM produtos"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function consultarLimite()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM produtos limit 3"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }    

    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM produtos 
        WHERE id = :id");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":id",    $this->id);
        $cmd->execute(); //executar o comando
    }

    public function atualizar()
    {
        $con = Conexao::conectar();
        $cmd = $con->prepare("UPDATE produtos SET
                                     data = :data,
                                     nome         = :nome,
                                     categoria    = :categoria,
                                     descricao       = :descricao,
                                     imagem         = :imagem,
                                     preco          = :preco
                             WHERE id = :id");

        //enviar valores para os parâmetros SQL
        $cmd->bindParam(":id",   $this->id);
        $cmd->bindParam(":data",        $this->data);
        $cmd->bindParam(":nome",      $this->nome);
        $cmd->bindParam(":categoria", $this->categoria);
        $cmd->bindParam(":descricao",    $this->descricao);
        $cmd->bindParam(":imagem",      $this->imagem);
        $cmd->bindParam(":preco",       $this->preco);

        $cmd->execute();
    }

    public function retornar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM produtos
        WHERE id = :id"); //comando SQL
        $cmd->bindParam(":id", $this->id);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

}

?>