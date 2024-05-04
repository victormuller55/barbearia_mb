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
    <link rel="shortcut icon" type="image/png" href="../../imagens/logo.png">
    <title>Atualizar Funcionario | Scissor</title>
    <link rel="stylesheet" href="../../css/funcionarios.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/menu.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-row">
            <div class="sidebar">
               <div class="text-center mt-4">
                    <img src="../../imagens/logo.png" alt="" class="logo">
               </div>
               <hr>
               <ul style="list-style: none;">
                    <li><a style="text-decoration: none; color: white;" href="#"><div class="option">Inicio</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="vizualizar_servicos.php"><div class="option">Serviços</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="../funcionarios_page/vizualizar_funcionarios.php"><div class="option">Funcionarios</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="#"><div class="option">Meu Perfil</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="#"><div class="option">Sair da Conta</div></a></li>
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
                <input class="input mb-2" type="text" name="endereco_funcionario" placeholder="Digite o Endereço" value="<?= $funcionario['endereco_funcionario'] ?>" required><br>
                <button type="submit" class="btn btn-primary input">SALVAR DADOS</button>
            </form>
        </div>
    </div>    
</body>
</html>