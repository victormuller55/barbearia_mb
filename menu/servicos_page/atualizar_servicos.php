<?php

include("../../php/model/servico_model.php");

$id = $_GET["id_servico"];

$servicoModel = new ServicoModel();
$servico = $servicoModel->buscarServicoPorID($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../imagens/icon.png">
    <title>Atualizar Serviço | Scissor</title>
    <script src="https://kit.fontawesome.com/47e9777af5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/services.css">
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
            <form style="width:90%" class="p-3 " method="post" action="../../php/servicos_crud/servicos_update.php">
                <h3 class="mb-4 title">Alteração de Serviços</h3>
                <hr>
                <input class="input mb-2" type="hidden" name="id_servico" value="<?= $servico['id_servico'] ?>" required>
                <input class="input mb-2" type="text" name="cliente_servico" value="<?= $servico['cliente_servico'] ?>" placeholder="Digite o nome do cliente" required>
                <input class="input mb-2" type="text" name="funcionario_servico" value="<?= $servico['funcionario_servico'] ?>" placeholder="Digite o nome do funcionário" required><br>
                <input class="input mb-2" type="text" name="servico" value="<?= $servico['servico'] ?>" placeholder="Digite o serviço" required>
                <input class="input mb-2" type="text" name="data_hora" value="<?= $servico['data_hora'] ?>" placeholder="Digite a data/hora" required><br>
                <textarea row="3" class="input textarea mb-2" type="text" name="obs" value="<?= $servico['obs_servico'] ?>" placeholder="Observaçôes" required></textarea><br>
                <button type="submit" class="btn btn-primary input form">SALVAR DADOS</button>
            </form>
        </div>
    </div>    
</body>
</html>