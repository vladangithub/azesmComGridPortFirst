<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$wright = $_POST['wright'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'setforwebru@gmail.com';                 // Наш логин
$mail->Password = '$Drog745#';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('setforwebru@gmail.com', 'azesmDotCom');   // От кого письмо 
$mail->addAddress('azesm@yahoo.com');     // Add a recipient
$mail->addAddress('azesm08@yandex.ru');
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = '
    azesmDotCom mail me setforwebru@gmail.com <br> 
	Имя: ' . $name . ' <br>
	E-mail: ' . $email . '<br>
	Wright: ' . $wright . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}
