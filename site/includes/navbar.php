<nav class="navbar navbar-expand-lg fixed-top">
   
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">

            
            <li class="nav-item mx-2">
                <a class="nav-link lead px-3" href="#home"><span>Início</span></a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link lead px-3 " href="#sobre"><span>Sobre</span></a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link lead px-3 " href="#produtos"><span>Produtos</span></a>
            </li>

            <li class="nav-item mx-2">
                <a class="nav-link lead px-3 " href="#contatos"><span>Contatos</span></a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link lead px-3 " href="" data-toggle="modal" data-target="#cartModal"><span>Carrinho</span></a>
            </li>
            <?php if(!isset($_SESSION["sessao"])){?>
                <li class="nav-item mx-2">
                  <a class="nav-link lead px-3 " href="" data-toggle="modal" data-target="#userModal"><span>Acessar</span></a>
                </li>
            <?php };?>
            <?php if(isset($_SESSION["sessao"])){?>
                <li class="nav-item mx-2">
                    <a class="nav-link lead px-3"  href="<?php echo URL;?>meus-pedidos"><span>Meus Pedidos</span></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link lead px-3" href="<?php echo URL;?>sair"><span>Desconectar</span></a>
                </li>
            <?php };?>
        </ul>
    </div>
</nav>

