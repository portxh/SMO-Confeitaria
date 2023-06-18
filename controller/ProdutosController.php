<?php
include_once "model/Produtos.php"; 
include_once "model/Categoria.php";//incluir a model

class ProdutosController
{
    public function abrirCadastro()
    {
        UsuarioController::validaSessao(); //validando se usuário está logado
        UsuarioController::validaAdministrador();//verificar se é administrador

        include_once "view/cadastro_produtos.php";
    }

    public function abrirConsulta()
    { 
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        $produto = new Produtos();
        $dadosProduto = $produto->consultar();
        include_once "view/consulta_produtos.php";
    }

    public function cadastrar()
    {
        UsuarioController::validaSessao(); //validando sessão
        $produto = new Produtos();
        $produto->data   = $_POST["data"];
        $produto->nome  = $_POST["nome"];
        $produto->categoria  = $_POST["categoria"];
        $produto->descricao   = $_POST["descricao"];
        $produto->preco = $_POST["preco"];
        $produto->imagem   = "";
        //upload de imagem
        if($_FILES["imagem"]["error"] == 0)
        {
            $nomeArquivo = $_FILES["imagem"]["name"];
            $nomeTemp    = $_FILES["imagem"]["tmp_name"];
            //pegar a extensão do arquivo
            $info       = new SplFileInfo($nomeArquivo);
            $extensao   = $info->getExtension();
            //gerar novo nome aleatório para imagem
            $novoNome   = md5(microtime()) . ".$extensao";
        // local da pasta no site -> "pasta do site/imagens/materias/img/"
            $pastaDestino = "imagens/$novoNome";
            move_uploaded_file($nomeTemp, $pastaDestino);
            $produto->imagem   = $novoNome; //nome do arquivo para BD
        }//colocar a classe em uso
        //enviar valores do formulário para a classe
     
        
        $produto->cadastrar(); //executar o método que cadastra
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."cadastro-produto';
            </script>";
    }

    public function excluir($cod)
    {
        UsuarioController::validaSessao(); //validando se usuário está logado
        UsuarioController::validaAdministrador();//verificar se é administrador

        $produto = new Produtos();
        $produto->id = $cod;
        $produto->excluir();
        header("Location:".URL."consulta-produto");
    }

    public function editar($cod)
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        //buscar os dados na classe Usuario (model)
        $produto = new Produtos();
        $produto->id = $cod;
        $dadosProduto = $produto->retornar();
        include_once "view/editar_produtos.php"; //exibir a tela de editar dados do usuário
    }

    function atualizar()
    {
        //caso não usuário não esteja logado

        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();

        $produto = new Produtos();
        $produto->id     = $_POST["id"];
        $produto->data          = $_POST["data"];
        $produto->nome        = $_POST["nome"];
        $produto->categoria   = $_POST["categoria"];
        $produto->descricao      = $_POST["descricao"];
        $produto->preco         = $_POST["preco"];
        //$dadosNoticia = $not->retornar();
        //$not->imagem = $dadosNoticia->imagem;
        //upload de imagem
        if($_FILES["imagem"]["error"] == 4 && $produto->imagem == "")
        {
            $dadosProduto = $produto->retornar();
            $produto->imagem = $dadosProduto->imagem;
            /*
            $nomeTemp    = $_FILES["imagem"]["tmp_name"];
            $pastaDestino = "recursos/img/".$not->imagem;
            //pegar a extensão do arquivo
            $info       = new SplFileInfo($nomeTemp);
            $extensao   = $info->getExtension();
            $not->imagem   = $nomeTemp . ".$extensao";
            move_uploaded_file($nomeTemp, $pastaDestino);
            */
        }
        else
        {
            $nomeArquivo = $_FILES["imagem"]["name"];
            $nomeTemp    = $_FILES["imagem"]["tmp_name"];
            //pegar a extensão do arquivo
            $info       = new SplFileInfo($nomeArquivo);
            $extensao   = $info->getExtension();
            //gerar novo nome
            $novoNome   = md5(microtime()) . ".$extensao";
            $pastaDestino = "imagens/$novoNome";
            move_uploaded_file($nomeTemp, $pastaDestino);
            $produto->imagem   = $novoNome; //nome do arquivo para BD
        }
        $produto->atualizar();
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."consulta-produto';
              </script>";
    }



}
?>