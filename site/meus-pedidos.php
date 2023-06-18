<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Projeto de Conclusao de Curso para a Escola Tecnica ETEC Paulo do Carmo Monteiro, realizado por estudantes do curso de Informatica para a internet no ano de 2023.">
    <title>Meus Pedidos - SMO</title>

    <link rel="shortcut icon" href="./site/img/icon.svg" type="image/x-icon">

    <link rel="stylesheet" href="./site/css/bootstrap.min.css">

    <link rel="stylesheet" href="./site/css/style.css">
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg fixed-top">
   
   <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
       aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
       <ul class="navbar-nav">

           
           <li class="nav-item mx-3">
               <a class="nav-link lead px-3" href="index.php#home"><span>Início</span></a>
           </li>
           <li class="nav-item mx-3">
               <a class="nav-link lead px-3 " href="index.php#sobre"><span>Sobre</span></a>
           </li>
           <li class="nav-item mx-3">
               <a class="nav-link lead px-3 " href="index.php#produtos"><span>Produtos</span></a>
           </li>

           <li class="nav-item mx-3">
               <a class="nav-link lead px-3 " href="index.php#contatos"><span>Contatos</span></a>
           </li>
           
           <?php if(!isset($_SESSION["sessao"])){?>
               <li class="nav-item mx-3">
                 <a class="nav-link lead px-3 " href="" data-toggle="modal" data-target="#userModal"><span>Acessar</span></a>
               </li>
           <?php };?>
           <?php if(isset($_SESSION["sessao"])){?>
               <li class="nav-item mx-3">
                   <a class="nav-link lead px-3"  href="<?php echo URL;?>meus-pedidos"><span>Meus Pedidos</span></a>
               </li>
               <li class="nav-item mx-3">
                   <a class="nav-link lead px-3" href="<?php echo URL;?>sair"><span>Desconectar</span></a>
               </li>
           <?php };?>
       </ul>
   </div>
   
</nav>

    </header>
    <main>
        <section class="pedidos min-vh-100 d-flex justify-content-center align-items-center pedidos p-5" id="pedidos">
            <div class="container pt-5 h-75">
                <?php if (!$dadosPedidos) { ?>



                <div class='row my-3'>
                    <div class='col-sm-10 mx-auto alert alert-danger'>
                        <i class='fa fa-warning'></i><span> Ainda não há registros de pedidos em nosso sistema</span>
                    </div>
                </div>

                <?php }?>
                <div class="row my-3">
                    <div class="col-sm-10 rounded border mx-auto p-3 shadow bg-white">
                        <h5 class="text-center display-4">Histórico de Pedidos</h5>
                        <div class="table-responsive">
                            <table class="table table-responsive table-striped" id="">
                                <thead>
                                    <tr>
                                        <th class="col-1">#</th>
                                        <th class="col-1" scope="col">Data</th>
                                        <th class="col-3" scope="col">Pedido</th>
                                        <th class="col-2" scope="col">Valor</th>
                                        <th class="col-3" scope="col">Status</th>
                                        <th class="col-2 text-center" scope="col">Ação</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($dadosPedidos as $value) {


                                            if ($_SESSION["sessao"]) {
                                                if ($value->status == 1) {
                                                    $value->status = "Aguardando Pagamento";
                                                } else if ($value->status == 2) {
                                                    $value->status = "Pago";
                                                } else if ($value->status == 3) {
                                                    $value->status = "Entregue";
                                                } else if ($value->status == 4) {
                                                    $value->status = "Cancelado";
                                                };


                                                echo 
                                                    "<tr>
                                                        <th scope='row'>$value->idPedido</th>
                                                        <td >$value->data</td>
                                                        <td >$value->pedido</td>
                                                        <td >$value->valorTotal</td>
                                                        <td >$value->status</td>
                                                        <td >";
															if ($value->status == 'Aguardando Pagamento'){
                                                                        
                                                                $timezone  = new DateTimeZone('America/Sao_Paulo');
                                                                $dataAtual = new DateTime('now', $timezone);

                                                                $mensagem = ('Olá,%20me%20chamo:%20' . $value->nome . '%20sou%20o%20cliente%20SMO%20de%20número:%20' . $value->cod_usuario . ';' . '%20Gostaria%20de%20finalizar%20o%20pedido%20de%20número:%20' . $value->idPedido) . '.';
																echo "<a href='https://wa.me/5511958386501?text=$mensagem' onclick='return confirm(\"Deseja realizar o pagamento deste pedido?\")' target='_BLANK' class='btn btn-block btn-outline-success p-2'><i class='fa-solid fa-money-bill-wave'></i><span> Pagar</span></a>";
																echo "<a href='" . URL . "cancelar-pedido/$value->idPedido' onclick='return confirm(\"Deseja cancelar este pedido?\")' class='btn btn-block btn-outline-danger p-2'><i class='fa-solid fa-trash'></i><span> Cancelar</span></a>";
																
                                                                
															} else if ($value->status == 'Pago'){
																echo "Este pedido já foi pago.";
															} else if ($value->status == 'Entregue'){
                                                                echo "Pedido ja entregue.";
                                                            } else if ($value->status == 4) {
                                                                $value->status = "Cancelado";
                                                                
                                                            };
															
														"</td>
                                                        
                                                    </tr>"
                                                ;

                                            }                                     
                                            
                                        }
                                        ?>

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container-fluid d-flex flex-column justify-content-center">

        <div class="row pt-5">

            <div class="container d-flex flex-wrap justify-content-center">
                <div class="col-lg-3 cold-md-3 col-sm-12">
                    <ul>
                        <h3 class="lead text-center my-4 text-white">Paginas</h3>
                        <li class="lead text-reset text-center my-2 slogan"><a href="index.php#home" class="text-decoration-none links">Inicio</a></li>
                        <li class="lead text-reset text-center my-2 slogan"><a href="index.php#sobre" class="text-decoration-none links">Sobre a Confeitaria</a></li>
                        <li class="lead text-reset text-center my-2 slogan"><a href="index.php#produtos" class="text-decoration-none links">Produtos</a></li>
                        <li class="lead text-reset text-center my-2 slogan"><a href="index.php#contatos" class="text-decoration-none links">Contatos</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 cold-md-3 col-sm-12">
                    <ul>
                        <h3 class="lead text-center my-4 text-white">Termos</h3>
                        <li class="lead text-reset text-center my-2 slogan"><a href="<?php echo URL; ?>politica-privacidade" class="text-decoration-none links">Politica de Privacidade</a></li>
                        <li class="lead text-reset text-center my-2 slogan"><a href="<?php echo URL; ?>termos-uso" class="text-decoration-none links">Termos de Uso</a></li>

                    </ul>
                </div>
                <div class="col-lg-3 cold-md-3 col-sm-12">
                    <ul>
                        <h3 class="lead text-center my-4 text-white">Social</h3>
                        <li class="lead text-reset text-center my-2 slogan"><a href="http://www.whatsapp.com" target='_BLANK' class="text-decoration-none links">WhastApp</a></li>
                        <li class="lead text-reset text-center my-2 slogan"><a href="http://www.facebook.com" target='_BLANK' class="text-decoration-none links">Facebook</a></li>
                        <li class="lead text-reset text-center my-2 slogan"><a href="http://www.instagram.com" target='_BLANK' class="text-decoration-none links">Instagram</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <p class="slogan text-white text-center py-3">SMO Confeitaria | Todos os Direitos Reservados - © 2023</p>
        </div>

    </footer>
	
	<script src="./site/js/jquery.slim.min.js" crossorigin="anonymous"></script>

	<script src="./site/js/popper.min.js" crossorigin="anonymous"></script>

	<script src="./site/js/bootstrap.js" crossorigin="anonymous"></script>

	<script src="./site/js/formatInputs.js" crossorigin="anonymous"></script>

	<script src="https://kit.fontawesome.com/bde8df2ab9.js" crossorigin="anonymous"></script>

</body>

</html>