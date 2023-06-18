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
    <title>SMO Confeitaria - Contato</title>
</head>
<body>
<?php include_once "menu.php"; ?>
<div class="container">
    <div class="row my-3">
        <div class="col-sm-8 mx-auto">

            <div class="card">
                <div class="card-header bg-primary text-white">
                
                    <a href="<?php echo URL;?>consulta-contato" class="btn btn-secondary btn-sm float-right"><i class="fa fa-arrow-left"></i> Retornar Consulta</a>
                </div>

                <form action="<?php echo URL;?>respContato" method="post">

                <div class="card-body">
                                        
                    <div class="form-group">
                        
                        <?php // Enviando input oculto respondido = 1 para confirmar gravar no banco como mensagem enviada.?>
                        <input type="hidden" name="respondido" class="form-control" value="1">
                        <?php // Omintindo data que já foi gravada.?>
                        <input type="hidden" name="data" class="form-control" value="<?php echo $dadosContato->data ?>">
                        
                        <label class="form-label">Código do contato:</label>
                        <input type="text" name="cod_contato" class="form-control bg-light" value="<?php echo $dadosContato->cod_contato ?>" readonly required> 
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nome do contato:</label>
                        <input type="text" name="nome" class="form-control bg-light" value="<?php echo $dadosContato->nome;?>" readonly required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">E-mail do contato:</label>
                        <input type="email" name="email" class="form-control bg-light" value="<?php echo $dadosContato->email;?>" readonly required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Assunto selecionado pelo contato:</label>
                        <input type="text" name="assunto" class="form-control bg-light" value="<?php echo $dadosContato->assunto;?>" readonly required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Mensagem enviada pelo contato:</label>
                        <textarea name="mensagem" class="form-control bg-light" rows="3" aria-label="Disabled input example" readonly><?php echo $dadosContato->mensagem;?></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label"><b>Escreva aqui a resposta para o <i>contato</i> acima:</b></label>
                        <textarea name="respMensagem" class="form-control" rows="7" placeholder="Escreva aqui a resposta para o contato"></textarea>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-6">
                            <button type="submit" class="form-control btn btn-primary mt-3">Enviar Mensagem</button>
                        </div>
                    </div>
                    
                </div>
                
                </form>
            </div>


        </div>
    </div>
</div>

<!-- JS Query--> 
<<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script>
    $("#ativo").
    val("<?php echo $dadosNoticia->ativo;?>");
</script>
</body>
</html>