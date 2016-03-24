<?php
date_default_timezone_set('Etc/UTC');
header('Content-Type: text/html; charset=utf-8');

require_once('PHPMailerAutoload.php');
require_once('class.smtp.php');

$user_name = $_REQUEST['user_name'];
$email	   = $_REQUEST['email'];
$message   = $_REQUEST['message'];


//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.tdgroup.ge";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "support@tdgroup.ge";
//Password to use for SMTP authentication
$mail->Password = "sudobash";
//Set who the message is to be sent from
$mail->setFrom('support@tdgroup.ge', 'საიტიდან მოგვწერეს');
//Set an alternative reply-to address
$mail->addReplyTo('support@tdgroup.ge', 'საიტიდან მოგვწერეს');


$mail->addAddress('info@carekids.ge');

//$mail->AddCC($bcc_address);

//$mail->AddBCC($cc_address);

$mail->Subject = $email;

$mail->msgHTML($message);

if (!$mail->send()) {

    $status=0;
    $data		= array('status'	=> $status);
} else {
    $status=1;
    $data		= array('status'	=> $status);
}
echo json_encode($data);