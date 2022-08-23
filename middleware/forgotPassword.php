<?php
include_once('phpMailer.php');
include_once('dbConnection.php');
session_start();


$result = selectQuery("SELECT u.id FROM users AS u WHERE email = '{$_POST['contact']}'");
if($result == true) {
    $authCode = rand(111111,999999);
    insertQuery("INSERT INTO renew_password_codes (user_id, auth_code) VALUES ({$result[0]["id"]}, {$authCode})");
    
    ob_start();
    include('../resources/mails/forgot_password.php');
    $body = ob_get_clean();
    
    
    newMail($_POST['contact'], "DICAP - Renew password", $body);

    //remove this later once it's no longer intesting phase
    //
    //
    //
    //
    //
    header("location: ../pages/renewCodeAuthentication.php");
}
else {
    // Throw *cannot be found error*
}

?>