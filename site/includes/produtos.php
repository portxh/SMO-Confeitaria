<?php


$products = getProducts($pdoConnection);


foreach ($products as $product) : ?>

    <div class="col-lg-4 col-md-6 col-sm-12">

        <div class="card produto crescer py-5 border-0 my-3">

            <img src="imagens/<?php echo $product['imagem']; ?>" class="card-img-top img-prod" alt="<?php echo $product['nome']; ?>">


            <div class="card-body">
                <div>
                    <h2 class="card-title text-center"><?php echo $product['nome'] ?></h2>
                </div>
            </div>
            <div class="px-5 mb-0 border-0 bg-transparent">
                <p class="card-text text-center">R$<?php echo number_format($product['preco'], 2, ',', '.') ?> /kg</p>
                <a class="btn btn-block mt-3 botao-prod" data-toggle="modal" data-target="#prodModal<?php echo $product['id'] ?>" aria-label="Mais detalhes do produto">Ver Produto</a>

            </div>
        </div>

    </div>


<?php endforeach; ?>

<?php
    include_once 'modal-prod.php';
?>