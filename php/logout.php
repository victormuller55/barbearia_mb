<?php 
// Inicia a sessão
session_start();

// Apaga todos os dados da sessão
$_SESSION = array();

// Se desejar, você também pode apagar o cookie de sessão
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finaliza a sessão
session_destroy();

header("Location: ../index.php");

?>