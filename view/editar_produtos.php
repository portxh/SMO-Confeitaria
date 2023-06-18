<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="<?php echo URL; ?>recursos/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./site/img/icon.svg" type="image/x-icon">
    <title>SMO Confeitaria - Produtos</title>
</head>

<body>
    <?php include_once "menu.php"; ?>
    <div class="container">
        <div class="row my-3">
            <div class="col-sm-8 mx-auto">

                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between pt-4">
                        <h5 class="card-title">Editar Produto</h5>
                        
                    </div>
                    <div class="card-body">
                        <form action="<?php echo URL . 'atualizar-produto'; ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $dadosProduto->id; ?>">

                            <!--<div class="form-group">
                                <label>Data:</label>
                                <input type="date" name="data" class="form-control" value="<?php echo $dadosProduto->data ?>" required>
                            </div>-->
                            <input type="hidden" name="data" id="data" value="
                                <?php

                                $dataAtual = new DateTime();
                                $dataFormatada = $dataAtual->format('Y-m-d');
                                echo $dataFormatada;

                                ?>
                            ">

                            <div class="form-group">
                                <label>Nome:</label>
                                <input type="text" name="nome" class="form-control" value="<?php echo $dadosProduto->nome; ?>" required>
                            </div>
                            <div class="form-group mt-2">
                                <label>Categoria:</label>
                                <select name="categoria" id="cod_categoria" class="form-control">
                                    <?php

                                    $cat = new Categoria();
                                    $dadosCategoria = $cat->consultar();
                                    foreach ($dadosCategoria as $value) {
                                        $selected = $value->cod_categoria ==
                                            $dadosProduto->cod_categoria ? "selected" : "";

                                        echo "<option value='$value->nm_categoria' $selected>
                                            $value->nm_categoria
                                          </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label>Descricao:</label>
                                <textarea name="descricao" class="form-control" rows="7"><?php echo $dadosProduto->descricao; ?></textarea>
                            </div>
                            <div class="form-group mt-2 w-25 mx-auto">
                                <label class="text-center">Imagem adicionada:</label>
                                <img src="<?php echo URL . "imagens/$dadosProduto->imagem"; ?>" width='150px' class="rounded d-block">
                            </div>

                            <div class="form-group mt-2">
                                <label>Trocar imagem:</label>
                                <input type="file" name="imagem" accept="image/*" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label>Preco:</label>
                                <input type="text" name="preco" class="form-control" value="<?php echo $dadosProduto->preco; ?>" required>
                            </div>

                            <div class="d-grid gap-2 mt-2">
                                <input type="submit" class="btn btn-primary" value="Salvar">
																<a href="<?php echo URL; ?>consulta-produto" class="btn btn-secondary"><i class="fa fa-arrow-left"></i><span> Consultar Produtos</span></a>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- JS Query-->
    <<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
        <script>
            $("#ativo").
            val("<?php echo $dadosProduto->ativo; ?>");
        </script>
</body>

</html>