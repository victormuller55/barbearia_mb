<?php 
include("model/usuario_model.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = new UsuarioModel();

$usuario->email = $email;
$usuario->senha = $senha;

if ($usuario->login()) {

    $usuarioEncontrado = $usuario->login();
    header("Location: ../menu/home_page/home.php");
} else {
    header("Location: ../index.php?error=login_failed");
}
?>