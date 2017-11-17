<?php
ini_set('display_errors', 'On');

//include 'includes/startup.php';
include('php-mailer/PHPMailer.php');
include('php-mailer/Exception.php');
include('php-mailer/SMTP.php');
include('php-mailer/OAuth.php');
include('php-mailer/POP3.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\POP3;
//use CristianPontes\ZohoCRMClient\ZohoCRMClient;

//$zohoClient = new ZohoCRMClient('CustomModule2', CRM_AUTH_TOKEN);

//$mappedData = formVariableRemap($_POST);

/*$insert = $zohoClient->insertRecords()
    ->addRecord($mappedData)
    ->onDuplicateUpdate()
    ->request();*/

/*if ($insert) {
    $recordInfo = reset($insert);

    $mappedData['CRM Link'] = sprintf('https://crm.zoho.com/crm/EntityInfo.do?module=Leads&id=%s', $recordInfo->id);
}

if (!is_localhost()) {
    insertOrderForm($_POST);
}*/

$mail = new PHPMailer();

/*if (!is_localhost()) {
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.office365.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'admin@centra.tech';                 // SMTP username
    $mail->Password = 'LIUyt7b8t3oy(*^5487&)';
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to
} else {*/
    //$mail->SMTPDebug = 3;
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'juliafodor828@gmail.com';                 // SMTP username
    $mail->Password = '';
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
//}

$mail->setFrom($_POST['useremail'], $_POST['username']);
$mail->addAddress('support@centra.tech'); // Add a recipient

//$mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true); // Set email format to HTML

$mail->Subject = 'A new card order form from ' . $_POST['username'];
$mail->Body = $_POST['message'];//loadTemplate('email.php', $mappedData);

if ($mail->send()) {
	die(json_encode(array('success', "Your application has been sent successfully!")));
} else {
	die(json_encode(array('error', "There was an error while processing your application.")));
}
