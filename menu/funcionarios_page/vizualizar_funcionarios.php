<?php 
   include("../../php/model/servico_model.php");
   
   $servico = new ServicoModel();
   $servicos = $servico->buscarServicos()
   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios | Scissor</title>
    <link rel="shortcut icon" type="image/png" href="../../imagens/logo.png">
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
                  <a href="adicionar_servicos.php"><button class="btn btn-primary button-table shadow-none" type="submit">ADICIONAR</button></a>
               </div>
               </div>
            </div>
            <table border="1">
            <thead>
               <tr>
                  <th class="th-first">Nome</th>
                  <th>Funcionario</th>
                  <th>Serviço</th>
                  <th>Data / Hora</th>
                  <th>Observações</th>
                  <th>Alterar</th>
                  <th class="th-last">Excluir</th>
               </tr>
            </thead>
            <?php foreach ($servicos as $row_servico) :?>
            <tbody>
               <tr>
                  <td><?=$row_servico['cliente_servico']?></td>
                  <td><?=$row_servico['funcionario_servico']?></td>
                  <td><?=$row_servico['servico']?></td>
                  <td><?=$row_servico['data_hora']?></td>
                  <td><?=$row_servico['obs_servico']?></td>
                  <td><a href="">Alterar</a></td>
                  <td><a onclick="confirmaExclusaoServico(<?=$row_servico['id_servico']?>)" href="#">Excluir</a></td>
               </tr>
            </tbody>
            <?php endforeach;?>
            </table>
          </div>
     </div>
  </div>
</body>
</html>