<?php
session_start();

include("../../php/model/funcionario_model.php");

$query = isset($_GET["query"]) ? $_GET["query"] : ""; 
$nomeUsuario = $_SESSION["nome"];

$funcionarioModel = new FuncionarioModel();

if (empty($query)) {
    $funcionarios = $funcionarioModel->buscarFuncionarios();
} else {
    $funcionarios = $funcionarioModel->buscarFuncionario($query);
}

?>