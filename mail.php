<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'c1312335.ferozo.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'centro-capatitaciones@sitio-testeo.com.ar';
    $mail->Password   = 'v*mk@Ur2hG';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('centro-capatitaciones@sitio-testeo.com.ar', 'WEB Centro de Capacitacion Laboral');
    $mail->addAddress('sergioscardigno82@gmail.com', 'WEB Centro de Capacitacion Laboral');
    $mail->addAddress('usinaestrategiasdigitales@gmail.com', 'WEB Centro de Capacitacion Laboral');
    $mail->addAddress('sergioscardigno82@gmail.com', 'WEB Centro de Capacitacion Laboral');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Mensaje de la pagina web';
    $mail->Body =    'Nombre: '.$nombre.'<br>'.
        'Empresa: '.$empresa.'<br>'.
        'Telefono: '.$telefono.'<br>'.
        'Celular: '.$celular;

    $mail->send();

    echo "<script>alert('Formulario Enviado');location.href =history.back();</script>";

} catch (Exception $e) {
    echo "No se pudo enviar el mensaje. Error de correo: {$mail->ErrorInfo}";
}
?>
