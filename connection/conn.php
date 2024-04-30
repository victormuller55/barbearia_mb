<?php 
$server = "localhost";
$user = "root";
$password = "root"; // senac: sem senha, dell: root
$db_name = "db_barbearia";

try {
    $conn = mysqli_connect($server, $user, $password, $db_name);
} catch (Exception $e) {
    die("Erro ao conectar: $e");
}


?>