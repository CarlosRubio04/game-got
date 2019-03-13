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
$password="luna0205";

$from= "no-repley@acsendo.com";
$from_name= $nameSend;
$msg="
<table border='0' cellpadding='0' cellspacing='0' width='100%' bgcolor='#F8F8F8' style='border-collapse:collapse'>
    <tbody>

        <tr>
            <td>
                <table border='0' cellpadding='0' cellspacing='0' width='400' align='center' style='border-collapse:collapse;margin:auto;min-width:400px'>
                    <tbody>
                        <tr>
                            <td>
                                <table border='0' cellpadding='0' cellspacing='0' width='740' align='right'>
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

        <tr>
            <td>
                <table border='0' cellpadding='0' cellspacing='0' width='400' align='center' style='border-collapse:collapse;margin:auto;min-width:400px'>
                    <tbody>
                        <tr>
                            <td style='color:#1c263a;font-size: 20px;'>
                                <p><b>$nameSend</b> Te reto a jugar.</p>
                                <p>Mi mejor puntaje ha sido <b>$score</b> </p>
                                <p><a style='color:#1c263a;font-size: 20px;' href='https://www.acsendo.com/GoT/'>Ir a Jugar</a></p>
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