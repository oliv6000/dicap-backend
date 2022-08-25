<?php
include_once('phpMailer.php');
include_once('dbConnection.php');
session_start();

$name = $_POST['name'];
$email = $_POST['email'];

try {
    // Create the user in the database
    insertQuery("INSERT INTO users (name, email) VALUES ('{$name}', '{$email}')");
    //selecting the specefic id from the user that was just created.
    
    $result = selectQuery("SELECT id FROM users WHERE email = '{$email}'");
    $user_id = $result[0]["id"];
    
    $authCode = rand(111111,999999);
    // Create authCode in the database, so that the user can go to the forgot password page, and renew the password/ create it for the first time
    insertQuery("INSERT INTO renew_password_codes (user_id, auth_code) VALUES ('{$user_id}', '{$authCode}')");
    
    ob_start();
    include('../resources/mails/forgot_password.php');
    $body = ob_get_clean();
    
    
    
    
    newMail($email, "DICAP - Renew password", $body);
    
    //remove this later once it's no longer in testing phase
    //
    //
    //
    //
    //
    header("location: ../pages/renewCodeAuthentication.php");
} catch (\Throwable $th) {
    //throw $th;
}


?>