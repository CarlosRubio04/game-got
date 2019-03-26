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

$from= "no-repley@acsendo.com";
$from_name= $nameSend;
$msg="
<meta http-equiv='Content-Type'  content='text/html charset=UTF-8' />
    <table border='0' cellpadding='0' cellspacing='0' width='100%' bgcolor='#F8F8F8' style='border-collapse:collapse'>
        <tbody>
           <tr height='50'></tr>
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
                                                        <img src='http://www.acsendo.com/wp-content/blogs.dir/18/files/2016/02/logo_nuevo.png' width='160' style='border:none;display:block'>
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

            <tr height='50'></tr>
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
                                                        <img src='https://www.acsendo.com/GoT/includes/header.jpg' width='400' style='border:none;display:block'>
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
                    <table border='0' cellpadding='0' cellspacing='0' width='400' align='center' style='border-collapse:collapse;margin:auto;min-width:400px'>
                        <tbody>
                            <tr align='center'>
                                <td style='color:#1c263a;font-size: 20px;font-size:29px;font-weight:800;'>
                                    <p style='text-align: center;'><b>Hola</b></p>
                                    <p style='text-align: center;'><b>$nameSend</b> obtuvo <b>$score</b> en el juego de Acsendo y te ha retado a obtener un mejor puntaje.</p>
                                    <p style='text-align: center;'><b>¿Crees que eres capaz de superarlo?</b> Ingresa ahora:</p>
                                </td>
                            </tr>
                            <tr>
                                <td align='center' style='padding:20px 0 40px'>
                                    <a href='https://www.acsendo.com/GoT/' style='border-radius:3px;color:#FFFFFF;background-color:#df5e35;display:inline-block;font-size:18px;font-weight:600;margin:auto;padding:10px 15px;text-decoration:none' target='_blank'>
                                        IR A JUGAR
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
"; // HTML message
$subject="$nameSend Te ha retado";
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