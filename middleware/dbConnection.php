<?php
function establish_db_connection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dicap";

    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
    }
    return $mysqli;
}

function runQuery(string $query) {
    $mysqli = establish_db_connection();

    $mysqli->query($query);
    $mysqli->close();
}

function selectQuery(string $query) {
    $mysqli = establish_db_connection();
    $result = $mysqli->query($query);
    $finalResult = $result->fetch_all(MYSQLI_ASSOC);
    $mysqli->close();
    return $finalResult;
}
?>