<?php
class Usuario
{
    //atributos da tabela usuário
    public $cod_usuario;
    public $nome;
    public $email;
    public $senha;
    public $tipo;
    public $cpf;
    public $celular;
    

    public function __construct() //será executado ao usar a classe
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("INSERT INTO usuarios (nome, email, senha, tipo, cpf, celular) 
        VALUES (:nome,:email,:senha,:tipo, :cpf, :celular)");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":nome",    $this->nome);
        $cmd->bindParam(":email",   $this->email);
        $cmd->bindParam(":senha",   $this->senha);
        $cmd->bindParam(":tipo",  $this->tipo);
        $cmd->bindParam(":cpf",  $this->cpf);
        $cmd->bindParam(":celular",  $this->celular);

        $cmd->execute(); //executar o comando
    }

    public function verificarExistencia()
    {
    $con = Conexao::conectar(); //conectar no BD
    // Realizar a consulta no banco de dados para verificar se o usuário já existe
    // Você precisa ajustar a consulta de acordo com a estrutura do seu banco de dados
    $cmd = $con->prepare("SELECT COUNT(*) FROM usuarios WHERE email = :email or cpf = :cpf");
    $cmd->bindParam(':email', $this->email);
		$cmd->bindParam(':cpf', $this->cpf);
    $cmd->execute();
    
    $total = $cmd->fetchColumn();
    
    return ($total > 0); // Retorna true se o usuário já existe, false caso contrário
    }

    public function consultar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM usuarios"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM usuarios 
        WHERE cod_usuario = :cod_usuario");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_usuario",    $this->cod_usuario);
        $cmd->execute(); //executar o comando
    }

    public function atualizar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("UPDATE usuarios SET
                                        nome    = :nome,
                                        email   = :email,
                                        senha   = :senha,
                                        cpf   = :cpf,
                                        celular   = :celular,
                                        tipo  = :tipo
                            WHERE cod_usuario = :cod_usuario");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_usuario",      $this->cod_usuario);
        $cmd->bindParam(":nome",            $this->nome);
        $cmd->bindParam(":email",           $this->email);
        $cmd->bindParam(":senha",           $this->senha);
        $cmd->bindParam(":tipo",          $this->tipo);
        $cmd->bindParam(":cpf",  $this->cpf);
        $cmd->bindParam(":celular",  $this->celular);

        $cmd->execute(); //executar o comando
    }

    public function retornar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM usuarios
        WHERE cod_usuario = :cod_usuario"); //comando SQL
        $cmd->bindParam(":cod_usuario", $this->cod_usuario);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

    public function logar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM usuarios
        WHERE email = :email"); //comando SQL
        $cmd->bindParam(":email", $this->email);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

}

?>