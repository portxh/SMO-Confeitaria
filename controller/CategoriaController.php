<?php
include_once "model/Categoria.php";

class CategoriaController
{
    public function abrirCadastro()
    {
        UsuarioController::validaSessao(); //validando sessão
        include_once "view/cadastro_categoria.php";
    }

    public function abrirConsulta()
    {
        UsuarioController::validaSessao(); //validando sessão
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();
        include_once "view/consulta_categoria.php";
    }

    public function cadastrar()
    {
        UsuarioController::validaSessao(); //validando sessão
        $cat = new Categoria();//colocar a classe em uso
        //enviar valores do formulário para a classe
        $cat->nm_categoria = $_POST["nm_categoria"];
        $cat->cadastrar(); //executar o método que cadastra
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."cadastro-categoria';
            </script>";
    }

    public function excluir($cod)
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        $cat  = new Categoria();
        $cat ->cod_categoria = $cod;
        $cat ->excluir();
        header("Location:".URL."consulta-categoria");
    }

    public function editar($cod)
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        //buscar os dados na classe Usuario (model)
         $cat = new Categoria();
         $cat->cod_categoria = $cod;
        $dadosCategoria =  $cat->retornar();
        include_once "view/editar_categoria.php"; //exibir a tela de editar dados do usuário
    }

    public function atualizar()
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        $cat = new Categoria();//colocar a classe em uso
        //enviar valores do formulário para a classe
        $cat->cod_categoria    = $_POST["cod_categoria"];
        $cat->nm_categoria     = $_POST["nm_categoria"];
        $cat->atualizar(); //executar o método que atualizar
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados atualizados com sucesso!');
                window.location='".URL."consulta-categoria';
            </script>";
    }
}
?>