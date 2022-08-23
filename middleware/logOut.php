<?php
include_once('dbConnection.php');
session_start();

    session_destroy();
    header("location: ../pages/homepage.php");
?>