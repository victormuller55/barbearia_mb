<?php 
include("../model/funcionario_model.php");

$id = $_GET['id_funcionario'];

$funcionario_class = new FuncionarioModel();
$funcionario_class->excluirFuncionario($id);
?>