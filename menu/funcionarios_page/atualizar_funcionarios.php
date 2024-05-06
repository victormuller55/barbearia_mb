<?php

include("../../php/model/funcionario_model.php");

$id = $_GET["id_funcionario"];

$funcionarioClass = new FuncionarioModel();
$funcionario = $funcionarioClass->buscarFuncionarioPorID($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../imagens/icon.png">
    <title>Atualizar Funcionario | Scissor</title>
    <script src="https://kit.fontawesome.com/47e9777af5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/funcionarios.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/menu.css">
</head>
<body>
    <header>
      <nav class="navbar navbar-light justify-content-between header-mb">
         <img src="../../imagens/logo.png" alt="" class="logo">
      </nav>
   </header>
    <div class="container-fluid">
        <div class="row flex-row">
            <div class="sidebar d-none d-md-block">
               <ul style="list-style: none;">
                    <li><a style="text-decoration: none; color: white;" href="../home_page/home.php"><div class="option mt-5"><i class="fa-solid fa-house mr-3 ml-2"></i>Inicio</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="../servicos_page/vizualizar_servicos.php"><div class="option"><i class="fa-solid fa-scissors mr-3 ml-2"></i>Serviços</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="../funcionarios_page/vizualizar_funcionarios.php"><div class="option"><i class="fa-solid fa-users mr-3 ml-2"></i>Funcionarios</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="../perfil_page/perfil.php"><div class="option"><i class="fa-solid fa-user mr-3 ml-2"></i>Meu Perfil</div></a></li>
               </ul>
            </div>
            <form style="width:90%" class="p-3 " method="post" action="../../php/funcionarios_crud/funcionario_update.php">
                <h4 class="mb-4 title"><?= $funcionario['nome_funcionario'] ?></h4>
                <hr>
                <input type="hidden" name="id_funcionario" value="<?= $funcionario['id_funcionario'] ?>">
                <input class="input mb-2" type="text" name="nome_funcionario" placeholder="Digite o Nome" value="<?= $funcionario['nome_funcionario'] ?>" required>
                <input class="input mb-2" type="text" name="cpf_funcionario" placeholder="Digite o CPF" value="<?= $funcionario['cpf_funcionario'] ?>" required><br>
                <input class="input mb-2" type="text" name="salario_funcionario" placeholder="Digite o Salario" value="<?= $funcionario['salario_funcionario'] ?>" required>
                <input class="input mb-2" type="text" name="telefone_funcionario" placeholder="Digite o Telefone" value="<?= $funcionario['telefone_funcionario'] ?>" required><br>
                <input class="input mb-2 endereco" type="text" name="endereco_funcionario" placeholder="Digite o Endereço" value="<?= $funcionario['endereco_funcionario'] ?>" required><br>
                <button type="submit" class="btn btn-primary input form">SALVAR DADOS</button>
            </form>
        </div>
    </div>    
</body>
</html>