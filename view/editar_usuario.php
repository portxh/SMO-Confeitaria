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
    <title>SMO Confeitaria - Usuários</title>
</head>
<body>
    <?php include_once "menu.php"; ?>

    <div class="container">
        <div class="row my-3 px-2">
            <div class="col-sm-8 rounded border mx-auto p-3 shadow">
                <h5 class="text-center">Atualizar dados de usuário</h5>
                <form action="<?php echo URL;?>atualizar-usuario" method="post">
                    <div class="form-group">
                        <input type="hidden" name="codusuario" id="codusuario" class="form-control" value="<?php echo $dadosUsuario->codusuario;?>" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Informe o nome completo" class="form-control" value="<?php echo $dadosUsuario->nome;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf" placeholder="Informe o seu CPF" class="form-control" value="<?php echo $dadosUsuario->cpf;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" name="celular" id="celular" placeholder="Informe o seu celular" class="form-control" value="<?php echo $dadosUsuario->celular;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Informe o e-mail" class="form-control" value="<?php echo $dadosUsuario->email;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="•••••••••••••••" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="acesso">Nível de Acesso</label>
                        <select name="acesso" id="acesso" class="form-control" required>
                            <option value="">Selecione...</option>
                            <option value="1" <?php if($dadosUsuario->tipo == 1) echo "selected";  ?>>Administrador</option>
                            <option value="2" <?php if($dadosUsuario->tipo == 2) echo "selected";  ?>>Usuário</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success mt-3">Gravar</button>
												<a href="<?php echo URL; ?>consulta-usuario" class="btn btn-secondary"><i class="fa fa-arrow-left"></i><span> Consultar Usuários</span></a>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>