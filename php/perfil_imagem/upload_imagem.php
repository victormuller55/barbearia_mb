<?php
include("../../conexao_db/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagem"]["name"])) {

    $nova_imagem = addslashes(file_get_contents($_FILES["imagem"]["tmp_name"]));
    $query = "SELECT id FROM imagens LIMIT 1";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $sql = "UPDATE imagens SET imagem = '$nova_imagem' WHERE id = 1"; // Supondo que você tenha apenas uma imagem no banco de dados
    } else {
        $sql = "INSERT INTO imagens (imagem) VALUES ('$nova_imagem')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Imagem enviada e salva com sucesso!";
        header("location:../../menu/perfil_page/perfil.php");
    } else {
        echo "Erro ao enviar imagem: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Nenhuma imagem foi enviada.";
}
?>
