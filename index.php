<?php
session_start();//iniciar a sessão

//classes necessárias
include_once "controller/HomeController.php";
include_once "controller/UsuarioController.php";
include_once "controller/CategoriaController.php";
include_once "controller/ProdutosController.php";
include_once "controller/PedidosController.php";
include_once "controller/ContatoController.php";
include_once "controller/AdminController.php";

//minha url
define('URL','http://localhost/meutcc/');

if(isset($_GET['url']))
{
    $url = explode('/', $_GET['url']);
    switch($url[0])
    {
        //rotas para categoria
        case 'cadastro-categoria':
            $categ = new CategoriaController();
            $categ->abrirCadastro();
        break;
        
        case 'enviar-categoria':
            $categ = new CategoriaController();
            $categ->cadastrar();
        break;
        
        case 'consulta-categoria':
            $categ = new CategoriaController();
            $categ->abrirConsulta();
        break;
        case 'excluir-categoria':
            $categ = new CategoriaController();
            $categ->excluir($url[1]);
        break;
        case 'editar-categoria':
            $categ = new CategoriaController();
            $categ->editar($url[1]);
        break;
        case 'atualizar-categoria':
            $categ = new CategoriaController();
            $categ->atualizar();
        break;

        //rotas para noticia
        case 'cadastro-produto':
            $prd = new ProdutosController();
            $prd->abrirCadastro();
        break;
        
        case 'enviar-produto':
            $prd = new ProdutosController();
            $prd->cadastrar();
        break;
        case 'consulta-produto':
            $prd = new ProdutosController();
            $prd->abrirConsulta();
        break;
        case 'excluir-produto':
           $prd = new ProdutosController();
           $prd->excluir($url[1]);
        break;
        case 'editar-produto':
            $prd = new ProdutosController();
            $prd->editar($url[1]);
        break;
        case 'atualizar-produto':
            $prd = new ProdutosController();
            $prd->atualizar();
        break;

        //rotas para usuário
        case 'consulta-usuario':
            $usu = new UsuarioController();
            $usu->abrirConsulta();
        break;

        case 'cadastro-usuario':
            $usu = new UsuarioController();
            $usu->abrirCadastro();
        break;

        case 'enviar-usuario':
            $usu = new UsuarioController();
            $usu->cadastrar();
        break;

        case 'excluir-usuario':
            $usu = new UsuarioController();
            $usu->excluir($url[1]);
        break;

        case 'editar-usuario':
            $usu = new UsuarioController();
            $usu->editar($url[1]);
        break;

        case 'atualizar-usuario':
            $usu = new UsuarioController();
            $usu->atualizar();
        break;

        //rotas contato
        case 'consulta-contato':
            $ctt = new ContatoController();
            $ctt->abrirConsulta();
        break;

        case 'enviar-contato':
            $ctt = new ContatoController();
            $ctt->cadastrar();
        break;

        case 'editar-contato':
            $ctt = new ContatoController();
            $ctt->editar($url[1]);
        break;

        case 'respContato':
            $resp = new ContatoController();
            $resp->respEmail();
        break;
        
        //rotas pedido
        case 'realizar-pedido':
            $ord = new PedidosController();
            $ord->cadastrar();
        break;
        
        case 'consulta-pedidos':
            $ord = new PedidosController();
            $ord->abrirConsulta();
        break;

        case 'meus-pedidos':
           $ord = new PedidosController();
           $ord->meusPedidos();
        break;

        case 'editar-pedido':
            $ord = new PedidosController();
            $ord->editar($url[1]);
        break;

        case 'atualizar-pedido':
            $ord = new PedidosController();
            $ord->atualizar();
        break;

        case 'excluir-pedido':
            $ord = new PedidosController();
            $ord->excluir($url[1]);
        break;
        
        case 'cancelar-pedido':
            $ord = new PedidosController();
            $ord->cancelar($url[1]);
        break;

        case 'logar':
            $usu = new UsuarioController();
            $usu->logar();
        break;

        case 'sair':
            $usu = new UsuarioController();
            $usu->sair();
        break;

        // chamada para área administrativa
        case 'admin':
            $usu = new AdminController();
            $usu->abrirAdmin();
        break;
        
        case 'politica-privacidade':
                //abrir a página inicial
                $home = new HomeController();
                $home->abrirPrivacidade();
        break;
        
        case 'termos-uso':
                //abrir a página inicial
                $home = new HomeController();
                $home->abrirTermos();
        break;

        default:
            
						
						echo "
						
						<!DOCTYPE html>
						<html lang='pt-br'>

						<head>
								<meta charset='UTF-8'>
								<meta http-equiv='X-UA-Compatible' content='IE=edge'>
								<meta name='viewport' content='width=device-width, initial-scale=1.0'>
								<title>SMO Confeitaria - Erro</title>

								<link rel='shortcut icon' href='./site/img/icon.svg' type='image/x-icon'>

								<link rel='stylesheet' href='./site/css/bootstrap.min.css'>

								<link rel='stylesheet' href='./site/css/style.css'>

						</head>
						<body
						
						<div class='container-fluid vh-100 produtos d-flex justify-content-center'>
								<div class='container h-50 my-auto'>
										<div class='mx-auto col-lg-12 col-md-12 col-sm-12'> 
											<h1 class='text-center text-white chamada'>Página não encontrada</h1>
										</div>
										<div class='mx-auto col-lg-5 col-md-8 col-sm-8 pt-5'> 
											<p class='display-4 text-center text-white'>Erro 404</p>
										</div>
										<div class='mx-auto col-lg-5 col-md-8 col-sm-8 py-5'> 
											<p class='lead slogan text-center text-white'>Tentando acessar a página: $url[0]</p>
											<p class='lead slogan text-center text-white'>A página pode ter sido movida, alterada ou excluída.</p>
										</div>
										<div class='mx-auto col-lg-5 col-md-8 col-sm-8 py-5'> 
											<a href='" . URL . " ' class='btn botao-prod btn-block'>Voltar ao Inicio</a>
										</div>
								</div>
						</div>
						</body>
        ";
        break;

    }

}
else
{
    //abrir a página inicial
    $home = new HomeController();
    $home->abrirHome();
}
?>