<?php
include_once "model/Pedidos.php";
include_once "model/Usuario.php";
//incluir a model

class PedidosController
{   

    public function abrirConsulta()
    { 
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        $ord = new Pedidos();
        $dadosPedidos = $ord->consultar();
        include_once "view/consulta_pedidos.php";
    }
    
    public function meusPedidos()
    {
       $ord = new Pedidos();
       $dadosPedidos = $ord->consultarMeuPedido();
       include_once "site/meus-pedidos.php";
    }

    public function cadastrar()
    {
        
        UsuarioController::validaSessao(); //validando sessão

        $ord = new Pedidos();

        $ord->cpf   = $_SESSION["sessao"]->cpf;
        $ord->cod_usuario  = $_SESSION["sessao"]->cod_usuario;
        $ord->nome  = $_SESSION["sessao"]->nome;
        $ord->celular  = $_SESSION["sessao"]->celular;
        $ord->pedido  = $_POST["pedido"];
        $ord->data  = $_POST["dataPedido"];
        $ord->valorTotal  = $_POST["valorTotal"];
        $ord->status  = $_POST["status"];
        $ord->dataStatus  = $_POST["dataStatus"];

        $ord->cadastrar(); //executar o método que cadastra


        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Pedido realizado com sucesso!');
                window.location='meus-pedidos';
            </script>";
       
    }

    public function excluir($cod)
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        $ord = new Pedidos();
        $ord->idPedido = $cod;
        $ord->excluir();
        // header("Location:".URL."consulta-pedidos");
        echo "<script>
                alert('Pedido cancelado com sucesso!');
                window.location='".URL."consulta-pedidos';
            </script>";
    }

    public function editar($cod)
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        //buscar os dados na classe Usuario (model)
        $ord = new Pedidos();
        $ord->idPedido = $cod;
        $dadosPedidos = $ord->retornar();
        include_once "view/editar_pedido.php"; //exibir a tela de editar dados do usuário
    }
    
    public function cancelar($cod)
    {
        UsuarioController::validaSessao(); //validando sessão
        // UsuarioController::validaAdministrador();//verificar se é administrador

        $timezone  = new DateTimeZone('America/Sao_Paulo');
        $dataAtual = new DateTime('now', $timezone);

        //buscar os dados na classe Usuario (model)
        $ord = new Pedidos();
        $ord->idPedido = $cod;
        $ord->status = 4;
        $ord->dataStatus = $dataAtual->format('Y-m-d H:i:s');
                                    
        $ord->cancelar();
        echo "<script>
                alert('Pedido cancelado com sucesso!');
                window.location='".URL."meus-pedidos';
            </script>";
    }

    public function atualizar()
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        $ord = new Pedidos();//colocar a classe em uso
        //enviar valores do formulário para a classe
        $ord->idPedido        = $_POST["idPedido"];
        //$ord->cpf              = $_POST["cpf"];
        //$ord->nome             = $_POST["nome"];
        //$ord->pedido            = $_POST["pedido"];
        //$ord->valorTotal           = $_POST["valorTotal"];
        $ord->status       = $_POST["status"];
        $ord->dataStatus       = $_POST["dataStatus"];
        $ord->atualizar(); //executar o método que atualizar
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Pedido atualizado com sucesso!');
                window.location='".URL."consulta-pedidos';
            </script>";
    }
    
    
}
