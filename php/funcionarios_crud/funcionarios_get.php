<?php 
   include("../../php/model/funcionario_model.php");
   
   $funcionarios = new FuncionarioModel();
   $funcionarios = $funcionarios->buscarFuncionarios()
   
?>