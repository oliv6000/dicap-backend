<?php
include_once('dbConnection.php');
session_start();
    $result = selectQuery("SELECT u.id, u.password, ar.assigned_role FROM users AS u INNER JOIN assigned_roles AS ar ON user_id = id WHERE email = '{$_POST["uname"]}'");
    if($result == true) {
        $hashedPassword = hash('sha256', $_POST["pwrd"]);
        if ($result[0]["password"] == $hashedPassword) {
            $_SESSION["id"] = $result[0]["id"];
            $_SESSION["role"] = $result[0]["assigned_role"];
            header("location: ../pages/homepage.php");
        }
        else {
            header("location: ../pages/login.php");
        }
    }
?>