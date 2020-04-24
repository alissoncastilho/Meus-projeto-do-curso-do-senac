<?php 

// Campos a alterar

$smtp = "smtp.gmail.com";
$remetente = "castilhoajn@gmail.com";
$remetenteSenha = "verissimo";
$remetenteNome = "Alisson Castilho";
$destinatario = "castilhoajn@gmail.com";
$assunto = "contato enviado pelo site";

// Recupera os dados do formulário

$nome = utf8_decode($_POST["nome"]);
$email = $_POST["email"];
$sexo = $_POST["sexo"];
$cidade =utf8_decode( $_POST["cidade"]);
$estado = $_POST["estado"];
$comentario = utf8_decode($_POST["comentario"]);
$newsletter= "Não";
if(isset($_POST["news"])){
    $newsletter = "sim";
}
$newsletter= utf8_decode($newsletter);

$msg = "";

$comentario = str_replace(chr(13),"<br>",$comentario);

// Monta o corpo do email

$texto = "<strong>Nome:</strong> $nome <br>
<strong>Email:</strong> $email <br>
<strong>Sexo:</strong> $sexo <br>
<strong>Cidade:</strong> $cidade <br>
<strong>Estado:</strong> $estado <br>
<strong>Newsletter:</strong> $newsletter <br>
<strong>Mensagem:</strong> $comentario";

// Inclui a função phpmailer

require_once('class.phpmailer.php');

// Define os parâmetros de envio 
 
$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 0;
$mailer->Port = 465;                                            // Porta - Usar sempre 587
$mailer->SMTPSecure = 'ssl';	                            // SSL REQUERIDO pelo GMail
$mailer->Host = $smtp;                                      // Host ou SMTP
$mailer->SMTPAuth = true;                               // Define se haverá ou não autenticação no SMTP
$mailer->isHTML( true );                                // Envia em HTML
$mailer->Charset = 'UTF-8';                             // Define a codificação
$mailer->Username = $remetente;                         // Informe o e-mai o completo
$mailer->Password = $remetenteSenha;                    // Senha da caixa postal
$mailer->FromName = $remetenteNome;                     // Nome que será exibido para o destinatário
$mailer->From = $remetente;                             // Obrigatório ser a mesma caixa postal indicada em "username"
$mailer->AddAddress($destinatario);                     // Destinatários
$mailer->Subject = $assunto;                            // Assunto
$mailer->Body = $texto;

// Faz o envio do email

if($mailer->Send()){
    //header("location: confirmacao.php");
    echo "Email enviado com sucesso";
}else{
    //header("location: erro.html");
    echo "Erro: " . $mailer->ErrorInfo; exit; 
}
?>