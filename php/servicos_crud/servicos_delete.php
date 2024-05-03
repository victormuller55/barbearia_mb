<?php 
include("../model/servico_model.php");

$id = $_GET['id_servico'];

$servico_class = new ServicoModel();
$servico_class->excluirServico($id);
?>