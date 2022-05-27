<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './phpmailer/Exception.php';
require './phpmailer/PHPMailer.php';
require './phpmailer/SMTP.php';

//Create an instance; passing `true` enables exceptions

// ALUMNOS 
$mail = new PHPMailer(true);
include "./conexion.php";
$id = $_GET['id'];
$sql = "SELECT email_alu FROM tbl_alumne WHERE id_alumne = {$id};";
// me lo devuelve y lo pongo en el array
$email = mysqli_query($con,$sql);

// recorre el array y guarda el correo, buscara el correo que quiere enviar
foreach ($email as $user) {
    $correo = $user['email_alu'];

}
// recogemos el asunto y el mensaje de la pagina correo.php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


// PROFESORES

$id = $_GET['id'];
$sql = "SELECT email_prof FROM tbl_professor WHERE id_professor = {$id};";
// me lo devuelve y lo pongo en el array
$email = mysqli_query($con,$sql);

// recorre el array y guarda el correo, buscara el correo que quiere enviar
foreach ($email as $user) {
    $correo = $user['email_prof'];

}
// recogemos el asunto y el mensaje de la pagina correo.php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];




try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    // servers
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ianromescuela@gmail.com';                     //SMTP username
    $mail->Password   = 'escprojecto23';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    // also accpeted
    $mail->Port = 587;                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
        );
    //Recipients
    $mail->setFrom('ianromescuela@gmail.com', 'Ian');
    $mail->addAddress("$correo");     //correo que elige el usuario
  

  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$asunto";  //asunto que escribe el usuario
    $mail->Body = "$mensaje";    //mensaje que escribe el usuario
    
    $mail->send();
    ?>
    
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'correo enviado exitosamente',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Volver'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                })
        }
        aviso('./tabla.php');
    </script>
    <?php } catch (Exception $e) {
    echo 'Hubo un error al enviar el mensaje',$mail->ErrorInfo;
}
?>
</body>
</html>