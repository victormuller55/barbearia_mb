<?php

include("../../conexao_db/conexao.php");

// Recupera a imagem do banco de dados
$sql = "SELECT imagem FROM imagens ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibe a imagem
    $row = $result->fetch_assoc();
    $imagem = 'data:image/jpeg;base64,'.base64_encode($row["imagem"]);
} else {
    // Se não houver imagem no banco de dados, exibe uma imagem padrão ou mensagem de erro
    $imagem = 'imagem_padrao.jpg'; // Substitua 'imagem_padrao.jpg' pelo caminho da imagem padrão desejada
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
