<?php foreach ($products as $product) : ?>
    <!-- Modal -->
    <div class="modal fade" id="prodModal<?php echo $product['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="prodModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable">
            <div class="modal-content produto border-0">

                <div class="modal-body border-0">
                <div class="col mt-4">
                    <a class="btn btn-light" data-dismiss="modal"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
                    <div class="mx-auto col-lg-10 col-md-10 col-sm-12">

                        <div class="card border-0">

                            <img src="imagens/<?php echo $product['imagem']; ?>" class="card-img-top img-prod" alt="<?php echo $product['nome']; ?>">
                            
                            <p class="card-text text-center">- Imagem meramente Ilustrativa -</p>


                            <div class="card-body">
                                <div class="">
                                    <h2 class="card-title text-center"><?php echo $product['nome'] ?></h2>
                                    <p class=" lead text-center"><?php echo $product["descricao"]; ?></p>
                                </div>
                            </div>
                            <div class="px-5 mb-0 border-0 bg-transparent">
                                <p class="card-text text-center">R$<?php echo number_format($product['preco'], 2, ',', '.') ?> /kg</p>
                                <?php if(isset($_SESSION["sessao"])){?>
                                    <a class="btn btn-block my-3 botao-prod" href="index.php?acao=add&id=<?php echo $product['id'] ?>" aria-label="Comprar Produto">Comprar</a>
                                <?php } else {echo '<a class="btn btn-block my-3 botao-prod" href="#userModal" data-dismiss="modal" data-toggle="modal" data-toggle="modal" aria-label="Login">Login</a>';}?>
                                

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php
