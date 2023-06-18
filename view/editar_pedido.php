<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FontAwesome CSS -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./site/img/icon.svg" type="image/x-icon">
    <title>SMO Confeitaria - Pedidos</title>
</head>
<body>
    <?php include_once "menu.php"; ?>

    <div class="container">
        <div class="row my-3 px-2">
            <div class="col-sm-8 rounded border mx-auto p-3 shadow">
                <h5 class="text-center">Atualizar dados do Pedido</h5>
                <form action="<?php echo URL;?>atualizar-pedido" method="post">
                    <div class="form-group">
                        <label for="idPedido">ID do Pedido</label>
                        <input type="text" name="idPedido" id="idPedido" class="form-control" value="<?php echo $dadosPedidos->idPedido;?>" readonly required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" id="cpf" placeholder="Informe o CPF" class="form-control" value="<?php echo $dadosPedidos->cpf;?>" maxlenght="14" readonly required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" placeholder="Informe o nome completo" class="form-control" value="<?php echo $dadosPedidos->nome;?>" readonly required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="celular">Celular:</label>
                        <input type="tel" name="celular" id="celular" placeholder="Informe o seu celular completo" class="form-control" value="<?php echo $dadosPedidos->celular;?>" maxlenght="15" readonly required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="pedido">Pedido:</label>
                        <!--<input type="text" name="pedido" id="pedido" placeholder="Informe o Pedido" class="form-control" value="<?php echo $dadosPedidos->pedido;?>" required>-->
                        <textarea name="pedido" class="form-control" id="pedido" rows="7" readonly required><?php echo $dadosPedidos->pedido;?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="data">Data do Pedido:</label>
                        <input type="text" name="data" id="data" placeholder="Informe o Data" class="form-control" value="<?php echo $dadosPedidos->data;?>" readonly required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="valorTotal">Valor Total:</label>
                        <input type="text" name="valorTotal" id="valorTotal" placeholder="00/00/0000" class="form-control" value="<?php echo $dadosPedidos->valorTotal;?>" readonly required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="">Selecione...</option>
                            <option value="1" <?php if($dadosPedidos->status == 1) echo "selected";  ?>>Aguardando Pagamento</option>
                            <option value="2" <?php if($dadosPedidos->status == 2) echo "selected";  ?>>Pago</option>
                            <option value="3" <?php if($dadosPedidos->status == 3) echo "selected";  ?>>Entregue</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="dataStatus" id="dataStatus" value="
                            	<?php

                            		$timezone  = new DateTimeZone('America/Sao_Paulo');
                            		$dataAtual = new DateTime('now', $timezone);
									echo $dataAtual->format('Y-m-d H:i:s');

                            	?>"
						>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success mt-3">Salvar</button>
												<a href="<?php echo URL; ?>consulta-pedidos" class="btn btn-secondary"><i class="fa fa-arrow-left"></i><span> Consultar Pedidos</span></a>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>