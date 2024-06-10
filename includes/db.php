<?php
$servername = "localhost";
$username = "root";
$password = "1235678"; 
$dbname = "odara"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
