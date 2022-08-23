<?php

include_once('dbConnection.php');
session_start();
    $result = selectQuery("SELECT id, user_id FROM renew_password_codes WHERE auth_code = '{$_POST['code']}'");
    if($result == true) {
            $_SESSION["renew_password_on_id"] = $result[0]["user_id"];
            $_SESSION["renew_password_id"] = $result[0]["id"];
            header("location: ../pages/renewPassword.php");
        }
        else {
            //display error *no password requested with this authentication code*
        }
?>