<?php 

include("objects/usuario_model.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = new UsuarioModel();

$usuario->email = $email;
$usuario->senha = $senha;

$usuario->login();
?>