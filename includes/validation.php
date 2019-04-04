<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');

$email = $_POST['email'];
$emailSend = $_POST['emailSend'];
$nameSend = $_POST['nameSend'];
$score = $_POST['score'];

$account="senderemailer@gmail.com";
$password="charlie0516*";

$from= "tools@acsendo.com";
$from_name= "Tools de Talento Humano";
$subject= "Has sido retado en el juego de Clima Laboral.";
$msg="
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html charset=UTF-8'>
    </head>
    <style>
    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
    }
    </style>
    <body bgcolor='#FFFFFF'>
        <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse:collapse'>
            <tbody>
                <tr>
                    <td>
                        <table border='0' cellpadding='0' cellspacing='0' width='400' align='center' style='border-collapse:collapse;margin:auto;min-width:400px'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table border='0' cellpadding='0' cellspacing='0' width='400' align='center'>
                                            <tbody>
                                                <tr>
                                                    <td align='center'>
                                                        <a href='http://www.acsendo.com/es/' style='display:block;text-decoration:none' target='_blank'>
                                                            <img src='https://www.acsendo.com/GoT/ImagenRedesGoT1.png' width='400' style='border:none;display:block'>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border='0' cellpadding='0' bgcolor='#F8F8F8' cellspacing='0' width='400' align='center' style='border-collapse:collapse;margin:auto;min-width:400px'>
                            <tbody>
                                <tr height='50'></tr>
                                <tr align='center'>
                                    <td>
                                        <p style='text-align:center;color:#1c263a;font-size: 28px;font-weight:800;'><b>Hola</b></p>
                                        <p style='color:#2d2d2e;font-size: 16px;font-weight:400;text-align:left;padding: 0 20px;text-align:center;'><b>$nameSend</b> estuvo librando una fiera batalla en el juego de Acsendo y obtuvo <b>$score</b> mejorando el clima laboral de Westeros Inc. </br> Sin embargo, ahora te ha retado a obtener un mejor puntaje que el suyo.</p>
                                        <p style='color:#2d2d2e;font-size: 18px;font-weight:400;text-align:center;padding: 0 20px;'><b>Ingresa ahora y supéralo</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align='center' style='padding:20px 0 40px'>
                                        <a href='https://www.acsendo.com/got/' style='border-radius:3px;color:#FFFFFF;background-color:#df5e35;display:inline-block;font-size:18px;font-weight:600;margin:auto;padding:10px 15px;text-decoration:none' target='_blank'>
                                            ¡Jugar ahora!
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table width='100%' border='0' cellspacing='0' cellpadding='10' bgcolor='#FFFFFF' data-target='footer'>
            <tr>
                <td align='center' valign='top'>
                    <p style='color:#888888;font-size:80%;line-height:16px;text-align:center'>
                        <span>
                            Enviado por <b>Acsendo</b> <br> www.acsendo.com
                            Carrera 12 #96-49 Bogotá, Colombia 
                        </span>
                    </p>
                </td>
            </tr>
        </table>
    </body>
</html>
"; // HTML message

/*End Config*/

include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->isSendMail();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 587;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($email);
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "$nameSend has retado a $email";
}
?>