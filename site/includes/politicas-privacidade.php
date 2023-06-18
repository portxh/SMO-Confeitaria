<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto de Conclusao de Curso para a Escola Tecnica ETEC Paulo do Carmo Monteiro, realizado por estudantes do curso de Informatica para a internet no ano de 2023.">
    <title>Política de Privacidade - SMO</title>

    <link rel="shortcut icon" href="./site/img/icon.svg" type="image/x-icon">

    <link rel="stylesheet" href="./site/css/bootstrap.min.css">

    <link rel="stylesheet" href="./site/css/style.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg fixed-top">

            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

                    <?php if (!isset($_SESSION["sessao"])) { ?>
                        <li class="nav-item mx-3">
                            <a class="nav-link lead px-3 " href="" data-toggle="modal" data-target="#userModal"><span>Acessar</span></a>
                        </li>
                    <?php }; ?>
                    <?php if (isset($_SESSION["sessao"])) { ?>
                        <li class="nav-item mx-3">
                            <a class="nav-link lead px-3" href="<?php echo URL; ?>meus-pedidos"><span>Meus Pedidos</span></a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link lead px-3" href="<?php echo URL; ?>sair"><span>Desconectar</span></a>
                        </li>
                    <?php }; ?>
                </ul>
            </div>

        </nav>


    </header>
    <main class="sobre">

        <div class="container py-5">
            <h2 class="px-3">Política de Privacidade da SMO Confeitaria</h2>
            <p class="pt-5 px-3 lead">
                A SMO Confeitaria valoriza e respeita a sua privacidade. Esta Política de Privacidade descreve como coletamos, usamos e protegemos as informações pessoais que você fornece ao utilizar nosso site. Por favor, leia atentamente as informações abaixo.
                <br><br>
                <strong>Coleta de Informações</strong>
                <br><br>
                Ao utilizar nosso site, podemos coletar as seguintes informações pessoais:
                <br><br>
                1. Carrinho de Compras: Utilizamos a tecnologia de sessão para armazenar os produtos selecionados em seu carrinho de compras durante a sua visita ao nosso site. Essas informações são temporárias e são utilizadas apenas para facilitar o processo de compra. Elas não são compartilhadas com terceiros.
                <br><br>
                2. Login: Caso você opte por criar uma conta em nosso site, solicitaremos seu endereço de e-mail e senha. Essas informações são utilizadas para autenticar seu acesso à sua conta e personalizar sua experiência de compra. Não compartilhamos essas informações com terceiros.
                <br><br>
                3. CPF: Para realizar o controle de pedidos e usuários, podemos solicitar o número de CPF. Essa informação é necessária para garantir a segurança das transações e cumprir as obrigações legais. Seu CPF não será compartilhado com terceiros, exceto quando exigido por lei ou com o seu consentimento explícito.
                <br><br>
                4. Número de Celular: Caso você opte por fornecer seu número de celular, poderemos utilizá-lo para entrar em contato com você via WhatsApp para confirmar pedidos, fornecer atualizações sobre o status dos pedidos ou para fins de atendimento ao cliente. Seu número de celular não será compartilhado com terceiros sem o seu consentimento.
                <br><br>
                5. Nome do Usuário: Ao criar uma conta em nosso site, solicitaremos seu nome para personalizar a sua experiência de compra e facilitar a identificação do usuário. Seu nome não será compartilhado com terceiros sem o seu consentimento.
                <br><br><br>
                <strong>Uso e Compartilhamento de Informações</strong>
                <br><br>
                Utilizamos as informações coletadas apenas para os fins descritos acima. Não compartilhamos suas informações pessoais com terceiros, exceto quando necessário para cumprir obrigações legais ou quando você nos fornecer seu consentimento explícito.
                <br><br>
                <strong>Segurança das Informações</strong>
                <br><br>
                Tomamos medidas de segurança adequadas para proteger suas informações pessoais contra acesso não autorizado, uso indevido, alteração ou divulgação. Utilizamos tecnologias de criptografia, protocolos seguros de transferência de dados e restrições de acesso físico e eletrônico aos nossos sistemas.
                <br><br>
                <strong>Cookies</strong>
                <br><br>
                Podemos utilizar cookies em nosso site para melhorar a sua experiência de navegação. Cookies são arquivos de texto que são armazenados no seu dispositivo quando você visita um site. Eles nos permitem lembrar suas preferências, personalizar o conteúdo e analisar o desempenho do site. Você pode configurar o seu navegador para recusar todos os cookies ou para indicar quando um cookie está sendo enviado.
                <br><br>
                <strong>Alterações nesta Política de Privacidade</strong>
                <br><br>
                Podemos atualizar esta Política de Privacidade periodicamente. Quaisquer alterações serão publicadas em nosso site e serão efetivas a partir da data de publicação. É recomendado que você revise esta política regularmente para se manter informado sobre como protegemos suas informações pessoais e como as utilizamos.
                <br><br>
                <strong>Seus Direitos</strong>
                <br><br>
                Você tem o direito de acessar, corrigir, atualizar ou excluir suas informações pessoais armazenadas em nossa base de dados. Caso deseje exercer esses direitos, entre em contato conosco utilizando os detalhes fornecidos no final desta política.
                <br><br>
                <strong>Links Externos</strong>
                <br><br>
                Nosso site pode conter links para outros sites externos. No entanto, não nos responsabilizamos pelas práticas de privacidade desses sites. Recomendamos que você revise as políticas de privacidade de cada site que visitar.
                <br><br>
                <strong>Consentimento</strong>
                <br><br>
                Ao utilizar nosso site, você será apresentado a um pop-up que lhe permite consentir ou não com o uso de cookies, bem como com a coleta, uso e armazenamento de suas informações pessoais, de acordo com nossa Política de Privacidade.
                <br><br>
                <strong>Contato</strong>
                <br><br>
                Caso tenha alguma dúvida ou preocupação relacionada à nossa Política de Privacidade, entre em contato conosco:
                <br><br>
                SMO Confeitaria<br><br>
                Endereço: R. Ermênio de Oliveira Penteado, 30<br><br>
                Telefone: (11) 95838 - 6501<br><br>
                E-mail: confeitariasmotcc@gmail.com<br><br>

                Agradecemos por confiar na SMO Confeitaria. Estamos comprometidos em proteger a sua privacidade e garantir que suas informações pessoais sejam tratadas com cuidado e segurança.
                <br><br>
                Data da última atualização: 20/05/2023
            </p>
        </div>

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