<?php
include_once('dbConnection.php');
session_start();


try {
    $newPassword = $_POST['newPwrd'];
    $userId = $_SESSION['renew_password_on_id'];
    $authId = $_SESSION['renew_password_id'];
    
    //insertQuery("UPDATE users SET 'password' = {$_POST['newPwrd']} WHERE CustomerID = $_SESSION['renew_password_on_id']");
    
    $hashedPassword = hash('sha256', $newPassword);

    updateQuery("UPDATE users SET password = '{$hashedPassword}' WHERE id = {$userId}");
    deleteQuery("DELETE FROM renew_password_codes WHERE id = {$authId}");
} catch (\Throwable $th) {
    //throw $th;
}


session_destroy();
header("location: ../pages/login.php");



?>