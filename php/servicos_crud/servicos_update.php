<?php 

include("../model/servico_model.php");

$servico = new ServicoModel();

$id_servico = $_POST['id_servico'];
$servico->cliente = $_POST['cliente_servico'];
$servico->funcionario = $_POST['funcionario_servico'];
$servico->servico = $_POST['servico'];
$servico->dataHora = $_POST['data_hora'];
$servico->obs = $_POST['obs'];

$servico->atualizarServico($id_servico);

?>