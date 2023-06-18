<!-- Modal -->
<div class="modal fade" id="userModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content produto border-0">

            <div class="modal-body border-0">
                <div class="col mt-4">
                    <a class="btn btn-light" data-dismiss="modal"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <div class="d-flex flex-wrap justify-content-center">

                    <div class="col-lg-6 col-md-6 col-sm-8">
                        <form action="<?php echo URL; ?>logar" method="post">
                            <div class="card border-0 mt-3">
                                <div class="card-body">
                                    <h4 class="text-center mb-5 lead">Acessar Usuário</h4>
                                    <label class="lead label-login" for="email">Email de usuário:</label>
                                    <input class="form-control form-login" type="text" autocomplete="email" id="email" name="email" placeholder="email@dominio.com">
                                    <br>
                                    <label class="lead label-login" for="senha">Senha de Usuário:</label>
                                    <input class="form-control form-login" type="password" autocomplete="current-password"  id="senha" name="senha" placeholder="Sua Senha">
                                    <br>
                                    <input class="btn btn-outline-info btn-block" type="submit" value="Entrar">
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-8">
                        <form action="<?php echo URL; ?>enviar-usuario" method="post">

                            <div class="card border-0 mt-3">
                                <div class="card-body">
                                    <h4 class="text-center mb-5 lead">Cadastrar Usuário</h4>
                                    <label class="lead label-login" for="cpf">CPF:</label>
                                    <input class="form-control form-login" type="text" name="cpf" id="cpf" autocomplete="cpf" required placeholder="123.456.789-00" maxlength="14">
                                    <br>
                                    <label class="lead label-login" for="nome">Nome:</label>
                                    <input class="form-control form-login" type="text" name="nome" id="nome" autocomplete="name" required placeholder="Seu Nome Completo">
                                    <br>
                                    <label class="lead label-login" for="celular">Celular:</label>
                                    <input class="form-control form-login" type="text" name="celular" id="celular" autocomplete="tel" required placeholder="(00) 0000-0000" maxlength="15">
                                    <br>
                                    <label class="lead label-login" for="email">Email:</label>
                                    <input class="form-control form-login" type="text" autocomplete="email" name="email" id="emailCad" required placeholder="email@dominio.com">
                                    <br>
                                    <label class="lead label-login" for="senha">Senha:</label>
                                    <div class="input-group">
                                        <input class="form-control form-login" type="password" autocomplete="new-password" minlength="8" name="senha" id="senhaCad" required placeholder="Crie sua senha">
                                    </div>

                                    <br>
                                    <input type="hidden" name="acesso" value="2">

                                    <input class="btn btn-outline-info btn-block" type="submit" value="Cadastrar">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>


            </div>

        </div>
    </div>
</div>