<?php
include_once('dbConnection.php');
session_start();
    $result = selectQuery("SELECT u.id, u.password FROM users AS u WHERE email = '{$_POST["uname"]}'");
    if($result == true) {
        $hashedPassword = hash('sha256', $_POST["pwrd"]);
        if ($result[0]["password"] == $hashedPassword) {
            $_SESSION["id"] = $result[0]["id"];
            $result = selectQuery("SELECT assigned_role FROM assigned_roles WHERE user_id = {$result[0]["id"]}");

            if($result2 == true) {
                $_SESSION["role"] = $result2[0]["assigned_role"];
            } else {
                $_SESSION["role"] = "";
            }
            header("location: ../pages/homepage.php");
        }
        else {
            header("location: ../pages/login.php");
        }
    } 
    else {
        echo 'something died validating the login credentials';   
    }
?>