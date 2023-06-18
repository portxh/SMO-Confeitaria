<!DOCTYPE html>
<html lang="pt-br">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Projeto de Conclusao de Curso para a Escola Tecnica ETEC Paulo do Carmo Monteiro, realizado por estudantes do curso de Informatica para a internet no ano de 2023.">
	<title>SMO Confeitaria</title>	

	<link rel="shortcut icon" href="./site/img/icon.svg" type="image/x-icon">
	
	<link rel="stylesheet" href="./site/css/bootstrap.min.css">

	<link rel="stylesheet" href="./site/css/style.css">
	
	<meta name="adopt-website-id" content="53c75d3a-589f-4756-9aed-1e6c15d92425" />
	
	
</head>



<body>
	<?php

	
	require_once "././model/Product.php";
	require_once "././model/Cart.php";
	

	$pdoConnection = Conexao::conectar(); //conectar no BD

	if (isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {

		if ($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])) {
			addCart($_GET['id'], 1);
			
		}

		if ($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])) {
			deleteCart($_GET['id']);
		}

		if ($_GET['acao'] == 'up') {
			if (isset($_POST['prod']) && is_array($_POST['prod'])) {
				foreach ($_POST['prod'] as $id => $qtd) {
					updateCart($id, $qtd);
				}
			}
		}
		echo "<script>alert('Carrinho atualizado.'); window.location='index.php#produtos';</script>";
		
	}

	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);


	?>

	<header>
		<?php 
			include './site/includes/navbar.php';
			include './site/includes/modal-login.php';
			include './site/includes/modal-carrinho.php';
		?>
	</header>
	<main>

		<section id="home" class="home">

			<?php

				include './site/includes/home.php';
				
			?>

		</section>

		<section id="sobre" class="sobre d-flex">
	
			<?php
				include './site/includes/sobre.php';
			?>

		</section>

		<section id="produtos" class="produtos pt-5">
			<div class="container-fluid min-vh-100 pt-5">

				<div class="container">

					<h2 class="display-4 text-center">
						Produtos
					</h2>
					<p class="lead text-center text-white">Bolos & Doces</p>

					<div class="py-5 d-flex flex-wrap">

						<?php
						include_once './site/includes/produtos.php';
						?>

					</div>

				</div>

			</div>

		</section>

		<section id="contatos" class="contatos pt-5">
			
			<?php
				include_once './site/includes/contato.php';
			?>

		</section>

	</main>

	<footer class="container-fluid d-flex flex-column justify-content-center">

		<?php
			include_once './site/includes/mapa-site.php';
		?>

	</footer>

	<script src="./site/js/jquery.slim.min.js" crossorigin="anonymous"></script>

	<script src="./site/js/popper.min.js" crossorigin="anonymous"></script>

	<script src="./site/js/bootstrap.js" crossorigin="anonymous"></script>

	<script src="./site/js/formatInputs.js" crossorigin="anonymous"></script>

	<script src="https://kit.fontawesome.com/bde8df2ab9.js" crossorigin="anonymous"></script>
	
	<script src="//tag.goadopt.io/injector.js?website_code=53c75d3a-589f-4756-9aed-1e6c15d92425" class="adopt-injector"></script>

</body>

</html>