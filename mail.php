<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$mail->CharSet = 'UTF-8';  // Set the CharSet to UTF-8


$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$consulta = $_POST['consulta'];
$celular = $_POST['celular'];

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = '#';
    $mail->SMTPAuth   = true;
    $mail->Username   = '#';
    $mail->Password   = '#';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('inscripciones@cclweb.com.ar', 'WEB Centro de Capacitacion Laboral');
    $mail->addAddress('#', 'WEB Centro de Capacitacion Laboral');
    $mail->addAddress('#', 'WEB Centro de Capacitacion Laboral');
    $mail->addAddress('inscripciones@cclweb.com.ar', 'WEB Centro de Capacitacion Laboral');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Mensaje de la pagina web';
    $mail->Body =    'Nombre: '.$nombre.'<br>'.
        'Empresa: '.$empresa.'<br>'.
        'Celular: '.$celular.
        'La consulta: '.$consulta.'<br>';

    $mail->send();

    echo "<script>alert('Formulario Enviado');location.href =history.back();</script>";

} catch (Exception $e) {
    echo "No se pudo enviar el mensaje. Error de correo: {$mail->ErrorInfo}";
}
?>
