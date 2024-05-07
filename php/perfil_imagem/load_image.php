<?php

include("../../conexao_db/conexao.php");

$sql = "SELECT imagem FROM imagens ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imagem = 'data:image/jpeg;base64,'.base64_encode($row["imagem"]);
} else {
    $imagem = 'imagem_padrao.jpg';
}

$conn->close();
?>
