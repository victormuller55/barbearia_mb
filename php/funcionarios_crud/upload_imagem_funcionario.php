<?php
include("../../conexao_db/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagem"]["name"])) {

    $nova_imagem = addslashes(file_get_contents($_FILES["imagem"]["tmp_name"]));
    $query = "SELECT id FROM imagens LIMIT 1";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $sql = "UPDATE imagens_funcionario SET imagem = '$nova_imagem' WHERE id = 1";
    } else {
        $sql = "INSERT INTO imagens_funcionario (imagem) VALUES ('$nova_imagem')";
    }

    if ($conn->query($sql) === TRUE) {
        header("location:../../menu/atualizar_funcionario.php");
    } else {
        print("Erro ao enviar imagem: " . $conn->error);
    }

    $conn->close();
} else {
    print("Nenhuma imagem foi enviada.");
}
?>