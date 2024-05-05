<?php 

include("../../php/model/servico_model.php");

$query = isset($_GET["query"]) ? $_GET["query"] : ""; 
$servicoModel = new ServicoModel();

if (empty($query)) {
    $servicos = $servicoModel->buscarServicos();
} else {
    $servicos = $servicoModel->buscarServico($query);
}

?>