<div class="container-fluid min-vh-100 pt-5">

    <div class="container h-100">

        <h2 class="display-4 text-center">Contatos</h2>
        <h3 class="lead text-center">Nossas maneiras de contato</h3>

        <div class="conteudo h-100">
            <div class="d-flex flex-wrap align-items-center justify-content-center">    
                <div class="col-lg-6 col-md-8 col-sm-12 my-5">
                    <form action="<?php echo URL; ?>enviar-contato" method="post" class="bg-form p-5">
                        
                        <div class="form-group ">
                            <label for="nome" class="label-contato lead">Nome Completo:</label>
                            <input type="text" class="form-control form-contato" id="nomeCon" name="nome" autocomplete="name" placeholder="Nome e Sobrenome">
                        </div>
                        <div class="form-group">
                            <label for="email" class="label-contato lead">Email para Contato:</label>
                            <input type="email" class="form-control form-contato" id="emailCon" name="email" autocomplete="email" placeholder="email@dominio.com">
                        </div>
                        <div class="form-group">
                            <label for="assunto" class="label-contato lead">Assunto do seu Contato:</label>
                            <input type="text" class="form-control form-contato" name="assunto" id="assunto" placeholder="Motivo do contato">
                        </div>
                        <div class="form-group">
                            <label for="mensagem" class="label-contato lead">Mensagem</label>
                            <textarea class="form-control form-contato" id="mensagem" name="mensagem" rows="3" placeholder="Escreva sua mensagem"></textarea>
                        </div>
                        <input type="hidden" name="data" id="data" value="
                            <?php 
                    
                                $timezone  = new DateTimeZone('America/Sao_Paulo');
                                $dataAtual = new DateTime('now', $timezone);
                                echo $dataAtual->format('Y-m-d H:i:s');
                            
                            ?>
                        ">
                        <button type="submit" class="btn btn-block btn-outline-secondary" aria-label="Enviar"><i class="fa-solid fa-paper-plane"></i> Enviar</button>
                    </form>
                </div>

                <div class="col-lg-6 col-md-8 col-sm-12 my-5">
                    <h5 class="lead text-center mb-5">Nossas Redes Sociais:</h5>
                    <div class="mx-3 mb-5 text-center">
                        <i class="fas fa-phone"></i>
                        <p class="lead">(11) 95838-6501</p>
                    </div>
                    <div class="mx-3 mb-5 text-center">
                        <i class="fab fa-instagram"></i>
                        <a href="http://instagram.com" target='_BLANK' class="link"><p class="lead">@SMO_Oficial</p></a>                    
                    </div>
                    <div class="mx-3 mb-5 text-center">
                        <i class="fab fa-facebook-f"></i>
                        <a href="http://facebook.com" target='_BLANK' class="link"><p class="lead">SMO Oficial</p></a>
                    </div>
                    <div class="mx-3 mb-5 text-center">
                        <i class="fa-brands fa-whatsapp"></i>
                        <a href="https://wa.me/5511958386501?text=Ola" target='_BLANK' class="link"><p class="lead">(11) 95838-6501</p></a>
                    </div>


                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-12 py-5 mx-auto">
                <div class="">
                    <h2 class="display-4 text-center">Onde Estamos</h2>
                    <h3 class="lead text-center mb-5">Nossa loja presencial</h3>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1153.4780551124295!2d-46.71412526631528!3d-23.385885403651557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cefb2b7ba32e93%3A0xdc086b7d3cfc7f4f!2sEtec%20de%20Caieiras!5e0!3m2!1spt-BR!2sbr!4v1684337664965!5m2!1spt-BR!2sbr" width="100%" height="400" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>

</div>