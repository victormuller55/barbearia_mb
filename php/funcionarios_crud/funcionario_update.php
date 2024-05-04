<?php 

include("../model/funcionario_model.php");

$funcionario = new FuncionarioModel();

$funcionario->idFuncionario = $_POST['id_funcionario'];
$funcionario->nomeFuncionario = $_POST['nome_funcionario'];
$funcionario->cpfFuncionario = $_POST['cpf_funcionario'];
$funcionario->salarioFuncionario = $_POST['salario_funcionario'];
$funcionario->telefoneFuncionario = $_POST['telefone_funcionario'];
$funcionario->enderecoFuncionario = $_POST['endereco_funcionario'];

$funcionario->atualizarFuncionario($funcionario->idFuncionario );

?>