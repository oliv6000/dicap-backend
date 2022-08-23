<?php
include_once('phpMailer.php');

$authentication_code = "182737";
ob_start();
include('../resources/mails/forgot_password.php');
$body = ob_get_clean();


newMail($_POST['contact'], "Forgot password", $body);


?>