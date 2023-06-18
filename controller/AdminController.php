<?php
class AdminController
{
    public function abrirAdmin()
    {
        UsuarioController::validaSessao(); //validando sessão
        include_once "view/home.php";

    }
}
?>