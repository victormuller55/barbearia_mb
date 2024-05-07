<?php
include("../../conexao_db/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagem"]["name"])) {

    $nova_imagem = addslashes(file_get_contents($_FILES["imagem"]["tmp_name"]));

    $sql = "INSERT INTO imagens_funcionario (imagem, id_funcionario) VALUES ('$nova_imagem','$idFuncionario')";

    if ($conn->query($sql) === TRUE) {
        header("location:../../menu/funcionarios_page/adicionar_funcionarios.php");
    } else {
        print("Erro ao enviar imagem: " . $conn->error);
    }

    $conn->close();
} else {
    print("Nenhuma imagem foi enviada.");
}
?>