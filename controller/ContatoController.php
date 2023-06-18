<?php
include_once "model/Contato.php";
include_once "recursos/phpmailer/class.phpmailer.php";

class ContatoController
{
  

    public function abrirConsulta()
    {
        UsuarioController::validaSessao(); //validando sessão
        $con = new Contato();
        $dadosContato = $con->consultar();
        include_once "view/consulta_contato.php";
    }

    public function cadastrar()
    {
        // UsuarioController::validaSessao(); //validando sessão
        $con = new Contato();//colocar a classe em uso
        //enviar valores do formulário para a classe
        $con->nome = $_POST["nome"];
        $con->email = $_POST["email"];
        $con->assunto = $_POST["assunto"];
        $con->mensagem = $_POST["mensagem"];
        $con->data = $_POST["data"];
        
        
        $con->cadastrar(); //executar o método que cadastra
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Contato realizado com sucesso! Fique atento ao seu email para o retorno.');
                window.location='".URL."';
            </script>";
    }


    public function editar($cod)
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        //buscar os dados na classe Usuario (model)
        $con = new Contato();//colocar a classe em uso
        $con->cod_contato = $cod;
        $dadosContato = $con->retornar();
        include_once "view/editar_contato.php"; //exibir a tela de editar dados do usuário
    }

    public function respEmail()
    {
        UsuarioController::validaSessao(); //validando sessão
        $con = new Contato();//colocar a classe em uso
        /*
        var_dump($_POST["respondido"]);
        var_dump($_POST["data"]);
        var_dump($_POST["respMensagem"]);
        var_dump($_POST["nome"]);
        exit;
        */

        //enviar valores do formulário para a classe
        $con->cod_contato = $_POST["cod_contato"];
        $con->nome = $_POST["nome"];
        $con->email = $_POST["email"];
        $con->assunto = $_POST["assunto"];
        $con->mensagem = $_POST["mensagem"];
        $con->data = $_POST["data"];
        $con->respondido = $_POST["respondido"];
        $con->atualizar(); //executar o método que cadastra
        
        
        //enviar email de resposta (pesquisar PHPMailer)

        //preparando campos de envia
        $assuntoEmail = 'Contato SMO Confeitaria: '. $_POST["nome"];
        $TextoEmail = '<h3>Retorno do contato feito no site SMO Confeitaria</h3><p><b>Nome contato:</b> '.$_POST["nome"].'<br><b>E-mail do contato:</b> '.$_POST["email"].'<br><b>Mensagem do contato:</b> '.$_POST["mensagem"].' </p><p><b>Resposta da SMO:</b></p><p>'.$_POST["respMensagem"];
        $QuemRecebe = $_POST["email"];;//quem irá receber
        $QuemEnvia = 'no-replay@smoconfeitaria.com';//o seu email para envio
        $SenhaQuemEnvia = 'Smoconfeitaria';//senha de quem está enviando
        $NomeQuemEnvia = 'Contato SMO Confeitaria';
        $porta = 465;
        $Segurança = 'ssl'; //ssl ou tls
        $smtpQuemEnvia = 'smtp.hostinger.com';//(OUTLOOK) procurar de acordo com o serviço 
        $TextoHTML = true;//se não for HTML deixar false

        
        //função PHPMailer para enviar mensagem
        $mail = new PHPMailer();
        $mail->IsSMTP();		// Ativar SMTP
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
        $mail->SMTPAuth = true;		// Autenticação ativada
        $mail->SMTPSecure = $Segurança;	// ou SSL o qual é requerido pelo gmail
        $mail->Host = $smtpQuemEnvia;// SMTP utilizado
        $mail->Port = $porta;  		// A porta 587 deverá estar aberta em seu servidor
        $mail->Username = $QuemEnvia;
        $mail->Password = $SenhaQuemEnvia;//colocar a senha do email criado
        $mail->SetFrom($QuemEnvia, $NomeQuemEnvia);
        $mail->Subject = $assuntoEmail;
        $mail->Body = ($TextoEmail);
        $mail->AddAddress($QuemRecebe);
        $mail->IsHTML($TextoHTML);//se for html true caso contrário false
        
        //se der erro
        if(!$mail->Send()) {
            $error = 'Mail error: '.$mail->ErrorInfo; 	
        } else {
            $error = 'Mensagem enviada com sucesso!';		
        }
	        //echo 'Mensagem: '.$error;

        //enviar uma mensagem de confirmação
        echo "<script>
                alert('$error');
                window.location='".URL."consulta-contato';
            </script>";
    }
}
?>