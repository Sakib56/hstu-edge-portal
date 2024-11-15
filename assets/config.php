<?php
$server = "localhost";

$user = "root";
$password = "";
$db = "hstu_edge_db";
$port = 3309;

$conn = mysqli_connect($server, $user, $password, $db, port: $port);

if (!$conn) {
    header('Location: ../errors/error.html');
    exit();
}


?>