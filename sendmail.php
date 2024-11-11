<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__.'/vendor/autoload.php';

// Crie uma instância do PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'mail.magicodoseculo.online'; // Servidor SMTP
    $mail->SMTPAuth   = true;
    $mail->Username   = 'no-reply@magicodoseculo.online'; // Seu e-mail
    $mail->Password   = 'dire@0300'; // Sua senha
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Criptografia
    $mail->Port       = 587; // Porta do servidor SMTP

    // Configurações do remetente e destinatário
    $mail->setFrom('no-reply@magicodoseculo.online', 'App sorte no Jogo');
    $mail->addAddress('suporte@omagicodoseculo.com', $_POST['nome'].' '.$_POST['sobrenome']);
    $mail->addAddress('jme.jose.max@gmail.com', $_POST['nome'].' '.$_POST['sobrenome']);

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Suporte';
    $mail->Body    = $_POST['msg'];
    $mail->AltBody = $_POST['email'].', enviou uma mensagem!';

    // Enviar o e-mail
    $mail->send();
    
    ?>
    <script>
        window.location.href = 'suporte.php?msg=E-mail enviado com sucesso!';
    </script>
    <?php
    
} catch (Exception $e) {
    
    ?>
    <script>
        window.location.href = 'suporte.php?msg=Erro ao enviar e-mail!';
    </script>
    <?php
}
?>
