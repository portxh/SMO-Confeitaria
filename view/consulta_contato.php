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
    <!-- CSS DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <title>SMO Confeitaria - Contato</title>

    

</head>
<body>
    <?php include_once "menu.php"; ?>

    <div class="container">
        <?php 
        if(!$dadosContato)
        {
            echo "<div class='row my-3'>
                <div class='col-sm-10 mx-auto alert alert-danger'>
                    <i class='fa fa-warning'></i> Ainda não há registros cadastrados na tabela
                </div>
            </div>";
        }
        ?>

        <div class="row my-3">
            <div class="col-sm-10 rounded border mx-auto p-3 shadow">
                <h5 class="text-center">Consulta de contato</h5>
                <div class="table-responsive">

                    <table class="table table-striped" id="tabela">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Assunto</th>
                            <th scope="col">Mensagem</th>
                            <th scope="col">Data</th>
                            <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                        <?php
                            foreach($dadosContato as $value)
                            {

                                // <td> <img src='imagens/$value->imagem '/></td>
                                
                                    echo "<tr>
                                        <th scope='row'>$value->cod_contato</th>
                                        <td>$value->nome</td>
                                        <td>$value->email</td>
                                        <td>$value->assunto</td>
                                        <td>$value->mensagem</td>
                                        <td>$value->data</td>
                                        <td>";

                                            if ($value->respondido){                                            
                                                echo "<button type='button' class='btn btn-outline-success btn-sm m-1' data-bs-container='body' data-toggle='popover' data-bs-placement='right' data-bs-content='O E-mail já foi respondido com sucesso!'><i class='fa fa-thumbs-up' aria-hidden='true'></i> </button>
                                                </td></tr>";
                                            } else{

                                                echo "<a href='". URL ."editar-contato/$value->cod_contato' onclick='return confirm(\"Tem certeza?\")' class='btn btn-outline-primary btn-sm m-1' data-toggle='tooltip' data-placement='right' title='Clique aqui para responder!'><i class='fa fa-reply'></i></a> 
                                                 <a href='#' class='btn btn-outline-warning btn-sm m-1' data-toggle='tooltip' data-placement='right' title='Email não respondido!'><i class='fa fa-exclamation-triangle'></i> </a>
                                                </td></tr>";
                                                
                                            }
                                        
                                }
                            
                            ?>

                        </tbody>
                    </table>        
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

            <!-- Popover -->
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- JS DataTables -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready( function () {
            $('#tabela').DataTable();
        } );
    </script>

    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>

    <script>
		$('[data-toggle="tooltip"]').tooltip()
	</script>
</body>
</html>