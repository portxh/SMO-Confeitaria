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
    <title>SMO Confeitaria - Produtos</title>
</head>

<body>
    <?php include_once "menu.php"; ?>

    <div class="container">
        <div class="row my-3 px-2">
            <div class="col-sm-8 rounded border mx-auto p-3 shadow">
                <h5 class="text-center">Cadastro de Produto</h5>
                <form action="<?php echo URL; ?>enviar-produto" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="data" id="data" value="
                        <?php

                            $dataAtual = new DateTime();
                            $dataFormatada = $dataAtual->format('Y-m-d');
                            echo $dataFormatada;

                        ?>
                    ">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Informe o nome do Produto" class="form-control" required>
                    </div>
                    <div class="form-group" required>
                        <label for="categoria">Categoria</label>
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="">Selecione...</option>
                            
                            <?php
                                $cat = new Categoria();
                                $dadosCategoria = $cat->consultar();
                                foreach ($dadosCategoria as $value) {
                                echo "<option value='$value->cod_categoria'>$value->nm_categoria</option>";
                                }
                            ?>

                        </select>
                    </div>
                    <div class="form-group" required>
                        <label for="imagem">Imagem</label>
                        <input class="form-control" type="file" id="imagem" name="imagem">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea name="descricao" id="descricao" class="form-control" placeholder="Informe a descrição do produto"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="preco">Preço</label>
                        <input class="form-control" type="number" id="preco" name="preco">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success mt-3">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>