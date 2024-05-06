<?php 

try {
    $conn = mysqli_connect("localhost", "root", "", "db_barbearia");
} catch (Exception $e) {
    die("Erro ao conectar: $e");
}

?>