<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto de Conclusao de Curso para a Escola Tecnica ETEC Paulo do Carmo Monteiro, realizado por estudantes do curso de Informatica para a internet no ano de 2023.">
    <title>Termos de Uso - SMO</title>

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
            <h2 class="px-3">Termos de Uso da SMO Confeitaria</h2>
            <p class="pt-5 px-3 lead">
                <strong>Capítulo 1: Introdução</strong>
                <br><br>
                1.1 SMO Confeitaria
                <br><br>
                A SMO Confeitaria é um e-commerce de bolos que oferece serviços de venda e encomenda de bolos personalizados. Nossa empresa está localizada na R. Ermênio de Oliveira Penteado, 30 em Laranjeiras - Caieiras, e proporcionamos aos nossos clientes a comodidade de encomendar bolos através de nosso site e recebê-los via delivery ou retirá-los em nosso estabelecimento.
                <br><br>
                1.2 Termo de Uso
                <br><br>
                Este Termo de Uso estabelece as regras e condições para utilização do site da SMO Confeitaria. Ao acessar e utilizar nosso site, você concorda em cumprir e ficar vinculado a este termo, bem como às leis e regulamentos aplicáveis. Caso não concorde com algum aspecto deste termo, solicitamos que não prossiga com o uso do site.
                <br><br>
                1.3 Aceitação e Modificações
                <br><br>
                Ao utilizar nosso site, você confirma que leu e compreendeu este termo de uso e concorda em cumpri-lo. A SMO Confeitaria se reserva o direito de modificar este termo a qualquer momento, sem aviso prévio. Recomendamos que você revise regularmente este documento para estar ciente de quaisquer alterações. O uso contínuo do site após a publicação de modificações implica na aceitação dessas alterações.
                <br><br>
                1.4 Restrições de Idade
                <br><br>
                O uso do site da SMO Confeitaria é permitido apenas para pessoas com idade igual ou superior a 18 anos. Ao utilizar nosso site, você declara que tem pelo menos 18 anos de idade ou está acessando o site sob a supervisão de um adulto responsável.
                <br><br>
                1.5 Contato
                <br><br>
                Em caso de dúvidas, sugestões ou problemas relacionados ao site ou aos serviços da SMO Confeitaria, você pode entrar em contato conosco através dos seguintes meios:
                <br><br>
                Telefone: (11) 95838 - 6501
                <br><br>
                E-mail: confeitariasmotcc@gmail.com
                <br><br>
                Endereço: R. Ermênio de Oliveira Penteado, 30
                <br><br>
                <br><br>
                <strong>Capítulo 2: Cadastro e Conta do Usuário</strong>
                <br><br>
                2.1 Cadastro na SMO Confeitaria
                <br><br>
                <i>2.1.1 Processo de Cadastro</i>
                <br><br>
                Para utilizar os serviços da SMO Confeitaria, é necessário realizar um cadastro em nosso site. Durante o processo de cadastro, solicitaremos informações pessoais, tais como nome completo, CPF, número de telefone e endereço de e-mail. Essas informações são necessárias para fornecer um atendimento personalizado e eficiente.
                <br><br>
                <i>2.1.2 Informações Precisas e Atualizadas</i>
                <br><br>
                Ao se cadastrar, é de responsabilidade do usuário fornecer informações precisas, completas e atualizadas. O usuário declara que todas as informações fornecidas são verdadeiras e concorda em mantê-las atualizadas, garantindo que sejam precisas e confiáveis.
                <br><br>
                2.2 Conta do Usuário
                <br><br>
                <i>2.2.1 Criação da Conta</i>
                <br><br>
                Após o cadastro, será criada uma conta de usuário na SMO Confeitaria. O usuário poderá acessar sua conta por meio de um email de usuário e senha escolhidos durante o processo de cadastro. É de responsabilidade do usuário manter a confidencialidade dessas informações e garantir que não sejam compartilhadas com terceiros.
                <br><br>
                <i>2.2.2 Uso da Conta</i>
                <br><br>
                A conta do usuário permite realizar encomendas de bolos, acompanhar o status dos pedidos, visualizar histórico de compras e receber comunicações relevantes da SMO Confeitaria. O usuário é responsável por todas as atividades realizadas em sua conta e concorda em notificar imediatamente a SMO Confeitaria sobre qualquer uso não autorizado ou suspeito.
                <br><br>
                <i>2.2.3 Veracidade dos Dados</i>
                <br><br>
                A SMO Confeitaria reserva-se o direito de verificar a veracidade das informações fornecidas durante o cadastro. Caso haja qualquer suspeita de informações falsas, imprecisas ou inadequadas, a SMO Confeitaria poderá suspender ou encerrar a conta do usuário, sem aviso prévio.
                <br><br>
                <i>2.2.4 Privacidade dos Dados</i>
                <br><br>
                A SMO Confeitaria valoriza a privacidade dos usuários e trata as informações pessoais de acordo com a legislação vigente. Para mais detalhes sobre a coleta, uso e proteção de dados pessoais, consulte nossa <a href="<?php echo URL; ?>politica-privacidade">Política de Privacidade</a>.
                <br><br>
                <br><br>
                <strong>Capítulo 3: Produtos e Serviços</strong>
                <br><br>
                3.1 Descrição dos Produtos e Serviços
                <br><br>
                <i>3.1.1 Bolos Personalizados</i>
                <br><br>
                A SMO Confeitaria oferece uma variedade de bolos personalizados, incluindo opções de sabores, pesos e decorações. Nossos bolos são preparados com ingredientes de alta qualidade e frescos, buscando atender às preferências e necessidades de nossos clientes.
                <br><br>
                3.2 Processo de Encomenda
                <br><br>
                <i>3.2.1 Seleção de Produtos</i>
                <br><br>
                Ao acessar nosso site, o usuário poderá visualizar os bolos disponíveis para encomenda, juntamente com suas descrições, imagens, e preços. O usuário poderá selecionar os produtos desejados e adicioná-los ao carrinho de compras.
                <br><br>
                <i>3.2.2 Carrinho de Compras</i>
                <br><br>
                Após selecionar os produtos desejados, o usuário poderá revisar e modificar o conteúdo de seu carrinho de compras antes de finalizar a encomenda. O carrinho de compras exibirá o subtotal dos produtos, taxas aplicáveis e o total a ser pago.
                <br><br>
                <i>3.2.3 Finalização do Pedido</i>
                <br><br>
                Para finalizar o pedido, o usuário deverá possuir uma conta ativa no aplicativo WhatsApp, e fornecer informações adicionais, como número de identificação do pedido, data e horário de entrega/retirada, endereço de entrega e observações. É importante que todas as informações fornecidas sejam precisas e atualizadas.
                <br><br>
                3.3 Pagamento
                <br><br>
                <i>3.3.1 Opções de Pagamento</i>
                <br><br>
                A SMO Confeitaria oferece diferentes opções de pagamento para os pedidos, incluindo pagamento através do WhatsApp utilizando a função de pagamento do aplicativo ou em dinheiro em espécie no momento da entrega.
                <br><br>
                <i>3.3.2 Segurança do Pagamento</i>
                <br><br>
                A segurança das transações de pagamento é uma prioridade para a SMO Confeitaria. Utilizamos tecnologias e práticas de segurança adequadas para proteger as informações do usuário durante o processo de pagamento pelo WhatsApp. No entanto, é importante ressaltar que nenhum método de transmissão ou armazenamento eletrônico é 100% seguro, e a SMO Confeitaria não pode garantir a segurança absoluta das informações transmitidas.
                <br><br>
                <i>3.4 Entrega e Retirada</i>
                <br><br>
                <i>3.4.1 Opções de Entrega</i>
                <br><br>
                A SMO Confeitaria oferece serviços de entrega via delivery, pelo WhatsApp e também disponibiliza a opção de retirada no estabelecimento. As áreas atendidas para entrega podem estar sujeitas a limitações geográficas.
                <br><br>
                <i>3.4.2 Prazos de Entrega</i>
                <br><br>
                O prazo de entrega dos pedidos pode variar de acordo com a disponibilidade, a localização do cliente e a demanda atual. Faremos todos os esforços para cumprir os prazos de entrega acordados, mas não nos responsabilizamos por eventuais atrasos decorrentes de circunstâncias imprevistas ou fora de nosso controle.
                <br><br>
                3.5 Cancelamentos e Trocas
                <br><br>
                <i>3.5.1 Cancelamento de Pedidos</i>
                <br><br>
                O usuário poderá solicitar o cancelamento de um pedido antes do seu processamento. Após o processamento do pedido, o cancelamento estará sujeito a avaliação e às políticas específicas da SMO Confeitaria.
                <br><br>
                <i>3.5.2 Trocas e Devoluções</i>
                <br><br>
                Caso haja algum problema com o bolo entregue, o usuário deverá entrar em contato conosco imediatamente. Faremos o possível para resolver qualquer questão de forma justa e adequada, considerando a natureza perecível de nossos produtos.
                <br><br>
                <br><br>
                <strong>Capítulo 4: Responsabilidades do Usuário</strong>
                <br><br>
                4.1 Uso Adequado
                <br><br>
                Ao utilizar o site e os serviços da SMO Confeitaria, o usuário concorda em seguir todas as leis, regulamentos e normas aplicáveis. O usuário não deve usar o site para qualquer finalidade ilegal, fraudulenta, difamatória, abusiva, prejudicial, obscena ou ofensiva. O uso indevido do site pode resultar na rescisão do acesso e em possíveis ações legais.
                <br><br>
                4.2 Informações e Conta de Acesso
                <br><br>
                O usuário é responsável por garantir que todas as informações fornecidas à SMO Confeitaria sejam precisas, completas e atualizadas. O usuário é responsável por manter a confidencialidade de sua conta de acesso e é exclusivamente responsável por todas as atividades que ocorram por meio dela. Caso haja qualquer uso não autorizado da conta, o usuário deve notificar imediatamente a SMO Confeitaria.
                <br><br>
                4.3 Conduta do Usuário
                <br><br>
                O usuário concorda em utilizar o site e os serviços da SMO Confeitaria de forma respeitosa, cortês e em conformidade com as políticas e diretrizes estabelecidas. O usuário não deve interferir ou interromper o funcionamento adequado do site, nem acessar áreas não autorizadas ou utilizar meios automáticos para coletar informações ou conteúdo do site.
                <br><br>
                4.4 Propriedade Intelectual
                <br><br>
                O usuário reconhece que todo o conteúdo presente no site da SMO Confeitaria, incluindo textos, imagens, logotipos, gráficos e outros materiais, é protegido por direitos autorais e outras leis de propriedade intelectual. O usuário concorda em não reproduzir, distribuir, modificar, criar obras derivadas ou utilizar qualquer conteúdo do site sem autorização prévia por escrito da SMO Confeitaria.
                <br><br>
                4.5 Comunicação Adequada
                <br><br>
                Ao utilizar qualquer recurso de comunicação disponibilizado pela SMO Confeitaria, como comentários, avaliações ou mensagens, o usuário concorda em se comunicar de forma respeitosa, não difamatória, não ofensiva e dentro dos limites da legalidade. A SMO Confeitaria se reserva o direito de remover ou editar qualquer conteúdo considerado inadequado ou violador das políticas estabelecidas.
                <br><br>
                4.6 Responsabilidade por Danos
                <br><br>
                O usuário é responsável por qualquer dano causado ao site, aos sistemas, à reputação ou aos interesses da SMO Confeitaria, bem como por qualquer violação dos direitos de terceiros decorrente do uso inadequado do site ou dos serviços. A SMO Confeitaria não se responsabiliza por danos ou prejuízos causados pelo uso indevido do site por parte do usuário.
                <br><br>
                <br><br>
                <strong>Capítulo 5: Disposições Gerais</strong>
                <br><br>
                5.1 Modificações dos Termos de Uso
                <br><br>
                A SMO Confeitaria reserva-se o direito de modificar estes termos de uso a qualquer momento, sem aviso prévio. As alterações entrarão em vigor assim que forem publicadas no site. É responsabilidade do usuário revisar periodicamente os termos de uso para estar ciente das atualizações. O uso continuado do site após as modificações constitui aceitação dos termos revisados.
                <br><br>
                5.2 Interrupção do Acesso
                <br><br>
                A SMO Confeitaria poderá interromper ou suspender o acesso ao site temporariamente ou permanentemente, por razões técnicas, de segurança, manutenção ou outras circunstâncias. A SMO Confeitaria envidará esforços razoáveis para notificar os usuários sobre interrupções planejadas, mas não será responsável por quaisquer inconveniências ou danos decorrentes dessas interrupções.
                <br><br>
                5.3 Limitação de Responsabilidade
                <br><br>
                A SMO Confeitaria não assume nenhuma responsabilidade por quaisquer danos diretos, indiretos, incidentais, consequenciais ou especiais que possam ocorrer como resultado do uso ou incapacidade de uso do site, incluindo perda de lucros, interrupção de negócios, falhas de sistema, vírus ou outras falhas tecnológicas.
                <br><br>
                5.4 Links para Terceiros
                <br><br>
                O site da SMO Confeitaria pode conter links para sites de terceiros. Esses links são fornecidos apenas para conveniência do usuário. A SMO Confeitaria não possui controle sobre o conteúdo, políticas de privacidade ou práticas desses sites de terceiros, e não é responsável por qualquer aspecto relacionado a esses sites.
                <br><br>
                5.5 Foro e Lei Aplicável
                <br><br>
                Estes termos de uso serão regidos e interpretados de acordo com as leis do país em que a SMO Confeitaria está sediada. Qualquer disputa decorrente ou relacionada a estes termos será submetida exclusivamente à jurisdição dos tribunais competentes desse país.
                <br><br>
                5.6 Integralidade do Acordo
                <br><br>
                Estes termos de uso representam o acordo completo entre o usuário e a SMO Confeitaria em relação ao uso do site e substituem quaisquer acordos anteriores ou contemporâneos, escritos ou orais, relacionados ao assunto abordado.
                <br><br>
                <br><br>
                <strong>Capítulo 6: Disposições Finais</strong>
                <br><br>
                6.1 Vigência
                <br><br>
                Estes termos de uso entrarão em vigor a partir do momento em que o usuário acessar o site da SMO Confeitaria e continuarão em vigor até que sejam rescindidos por uma das partes. A SMO Confeitaria reserva-se o direito de rescindir ou suspender o acesso do usuário ao site a qualquer momento, por qualquer motivo, sem aviso prévio.
                <br><br>
                6.2 Comunicação
                <br><br>
                Toda a comunicação relacionada a estes termos de uso deverá ser realizada por meio dos canais de contato disponibilizados pela SMO Confeitaria, como e-mail ou formulários de contato presentes no site. O usuário é responsável por fornecer informações de contato precisas e atualizadas para garantir uma comunicação eficaz.
                <br><br>
                6.3 Renúncia de Direitos
                <br><br>
                A falha da SMO Confeitaria em exercer ou fazer cumprir qualquer direito ou disposição destes termos de uso não constituirá uma renúncia a esse direito ou disposição. Qualquer renúncia por parte da SMO Confeitaria deverá ser feita por escrito e assinada por um representante autorizado.
                <br><br>
                6.4 Divisibilidade
                <br><br>
                Se qualquer disposição destes termos de uso for considerada inválida, ilegal ou inexequível por um tribunal competente, tal disposição será considerada separada dos demais termos e condições, e a validade, legalidade e exigibilidade dos demais termos não serão afetadas.
                <br><br>
                6.5 Acordo Completo
                <br><br>
                Estes termos de uso representam o acordo completo entre o usuário e a SMO Confeitaria e substituem quaisquer acordos anteriores ou contemporâneos, escritos ou orais, relacionados ao uso do site e serviços.

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