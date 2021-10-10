<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$dados = [
    'nome' => $_POST['nome'] ?? '',
    'pais' => strtoupper($_POST['pais']) ?? '',
    'mensagem' => $_POST['mensagem'] ?? ''
];

$mail = new PHPMailer(true); // true para habilitar as exceptions

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true; // pra não cair na caixa de SPAM
    $mail->Username = 'bfcbcf4b5c8035';
    $mail->Password = '5bfe9e1a0d26de';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';

    $mail->setFrom('tester@tester.com', 'Tester mail');
    $mail->addAddress('emersonsm@icloud.com', 'Emerson!');
    $mail->isHTML(true);
    $mail->Subject = 'Contato do site';

    $corpo = "<b>NOME: </b> {$dados['nome']}";
    $corpo .= "<b>PAÍS: </b> {$dados['pais']}";
    $corpo .= "<b>MSG: </b> {$dados['mensagem']}";

    $mail->Body = $corpo;
    $mail->send();

    echo "Mensagem enviada com sucesso";

} catch (\Exception $e) {
    echo $e->getMessage();
}

