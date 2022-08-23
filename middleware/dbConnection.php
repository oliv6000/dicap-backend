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

    $result = $mysqli->query($query);
    $mysqli->close();
    return $result;
}

function selectQuery(string $query) {
    $mysqli = establish_db_connection();
    $result = $mysqli->query($query);
    $finalResult = $result->fetch_all(MYSQLI_ASSOC);
    $mysqli->close();
    return $finalResult;
}

function insertQuery(string $query) {
    $mysqli = establish_db_connection();
    if(mysqli_query($mysqli, $query)){
    } else{
        echo "ERROR: Could not execute";
    }
}

function updateQuery(string $query) {
    $mysqli = establish_db_connection();
    if(mysqli_query($mysqli, $query)){
    } else{
        echo "ERROR: Could not execute";
    }
}

function deleteQuery(string $query) {
    $mysqli = establish_db_connection();
    if(mysqli_query($mysqli, $query)){
        return true;
    } else{
        echo "ERROR: Could not execute";
    }
}
?>