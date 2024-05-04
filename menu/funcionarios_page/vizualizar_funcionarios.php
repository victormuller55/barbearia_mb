<?php include("../../php/funcionarios_crud/funcionarios_get.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios | Scissor</title>
    <link rel="shortcut icon" type="image/png" href="../../imagens/logo.png">
    <script src="../../script/confirmar_exclusao.js"></script>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/funcionarios.css">
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
            <li><a style="text-decoration: none; color: white;" href="../servicos_page/vizualizar_servicos.php"><div class="option">Serviços</div></a></li>
            <li><a style="text-decoration: none; color: white;" href="#"><div class="option">Funcionarios</div></a></li>
            <li><a style="text-decoration: none; color: white;" href="#"><div class="option">Meu Perfil</div></a></li>
            <li><a style="text-decoration: none; color: white;" href="#"><div class="option">Sair da Conta</div></a></li>
          </ul>
        </div>
        <div class="p-3" style="width:90%">
            <div class="container-fluid mb-3">
               <div class="row">
               <div>
                  <a href="adicionar_funcionarios.php"><button class="btn btn-primary button-table shadow-none" type="submit">ADICIONAR</button></a>
               </div>
               </div>
            </div>
            <table border="1">
            <thead>
               <tr>
                  <th class="th-first">Nome</th>
                  <th>CPF</th>
                  <th>Salario</th>
                  <th>Telefone</th>
                  <th>Endereço</th>
                  <th>Alterar</th>
                  <th class="th-last">Excluir</th>
               </tr>
            </thead>
               <tbody>
               <?php if (empty($funcionarios)) : ?>
                  <tr>
                        <td colspan="7">Não há funcionários cadastrados.</td>
                  </tr>
               <?php else : ?>
                  <?php foreach ($funcionarios as $row_funcionarios) : ?>
                        <tr>
                           <td><?= $row_funcionarios['nome_funcionario'] ?></td>
                           <td><?= $row_funcionarios['cpf_funcionario'] ?></td>
                           <td><?= $row_funcionarios['salario_funcionario'] ?></td>
                           <td><?= $row_funcionarios['telefone_funcionario'] ?></td>
                           <td><?= $row_funcionarios['endereco_funcionario'] ?></td>
                           <td><a style="text-decoration: none; color: black"href="atualizar_funcionarios.php?id_funcionario=<?= $row_funcionarios['id_funcionario'] ?>">Alterar</a></td>
                           <td><a style="text-decoration: none; color: black" onclick="confirmaExclusaoFuncionario(<?= $row_funcionarios['id_funcionario'] ?>)" href="#">Excluir</a></td>
                        </tr>
                  <?php endforeach; ?>
               <?php endif; ?>
               </tbody>
            </table>
          </div>
     </div>
  </div>
</body>
</html>