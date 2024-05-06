<?php

session_start();

if(isset($_SESSION["email"])){
    header("Location: menu/servicos_page/vizualizar_servicos.php");
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" type="image/png" href="imagens/icon.png">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Barbearia MB</title>
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center" style="height: 100vh">
                <form method="POST" action="php/login.php" class="text-center bg-white">
                    <img class="mb-5" src="imagens/logo_black.png" alt="" width="200">
                    <?php if(isset($_GET['error']) && $_GET['error'] == 'login_failed'): ?>
                        <div class="alert alert-danger" role="alert" style="width: 300px;">
                            Por favor, verifique suas credenciais.
                        </div>
                    <?php endif; ?>
                    <input type="email" name="email" class="form-control input mb-1" placeholder="seunome@exemplo.com.br" required>
                    <input type="password" name="senha" class="form-control input mb-4" placeholder="***********" required>
                    <button type="submit" class="btn btn-primary input">ENTRAR</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>