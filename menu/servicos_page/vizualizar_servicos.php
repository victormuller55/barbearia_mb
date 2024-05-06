<?php include("../../php/servicos_crud/servicos_get.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <title>Serviços | Scissor</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="../../imagens/icon.png">
      <script src="https://kit.fontawesome.com/47e9777af5.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="../../css/bootstrap.css">
      <link rel="stylesheet" href="../../css/services.css">
      <link rel="stylesheet" href="../../css/menu.css">
      <script src="../../script/confirmar_exclusao.js"></script>
   </head>
   <body>
   <header>
      <nav class="navbar navbar-light justify-content-between header-mb">
         <img src="../../imagens/logo.png" alt="" class="logo">
         <a href="adicionar_servicos.php"><button class="btn btn-primary button-adicionar shadow-none text-white" type="submit">NOVO SERVIÇO<i class="fa-solid fa-plus ml-2"></i></button></a>
      </nav>
   </header>
   <div class="container-fluid">
      <div class="row flex-row">
         <div class="sidebar">
            <ul style="list-style: none;">
               <li><a style="text-decoration: none; color: white;" href="#"><div class="option mt-5"><i class="fa-solid fa-house mr-3 ml-2"></i>Inicio</div></a></li>
               <li><a style="text-decoration: none; color: white;" href="../servicos_page/vizualizar_servicos.php"><div class="option"><i class="fa-solid fa-scissors mr-3 ml-2"></i>Serviços</div></a></li>
               <li><a style="text-decoration: none; color: white;" href="../funcionarios_page/vizualizar_funcionarios.php"><div class="option"><i class="fa-solid fa-users mr-3 ml-2"></i>Funcionarios</div></a></li>
               <li><a style="text-decoration: none; color: white;" href="../perfil_page/perfil.php"><div class="option"><i class="fa-solid fa-user mr-3 ml-2"></i>Meu Perfil</div></a></li>
               <li><a style="text-decoration: none; color: white;" href="#"><div class="option"><i class="fa-solid fa-right-from-bracket mr-3 ml-2"></i>Sair da Conta</div></a></li>
            </ul>
          </div>
            <div class="p-3" style="width:90%">
               <div class="row justify-content-between pr-3 pl-3">
                  <h3 class="title">Serviços Agendados</h3>
                  <form class="form-inline" action="#" method="GET">
                     <input class="pl-2 mr-2 search-form" type="search" name="query" placeholder="Digite algo para pesquisar..." aria-label="Search">
                     <button type="submit" class="btn btn-primary search-button"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
                  </form>
               </div>
               <hr>
               <div class="container-fluid mb-3">
                  <div class="row">
                     <div>
                     </div>
                  </div>
               </div>
               <table border="1">
               <thead>
                  <tr>
                     <th>Nome</th>
                     <th>Funcionario</th>
                     <th>Serviço</th>
                     <th>Data / Hora</th>
                     <th>Observações</th>
                     <th>&nbsp;</th>
                     <th>&nbsp;</th>
                  </tr>
               </thead>
               <tbody>
                  <?php if (empty($servicos)) : ?>
                     <tr>
                           <td colspan="7">Não há serviços cadastrados no momento</td>
                     </tr>
                  <?php else : ?>
                     <?php foreach ($servicos as $row_servico) : ?>
                           <tr>
                              <td><?= $row_servico['cliente_servico'] ?></td>
                              <td><?= $row_servico['funcionario_servico'] ?></td>
                              <td><?= $row_servico['servico'] ?></td>
                              <td><?= $row_servico['data_hora'] ?></td>
                              <td><?= $row_servico['obs_servico'] ?></td>
                              <td class="options"><a style="text-decoration: none; color: black" href=""><i class="fa-solid fa-pen"></i></a></td>
                              <td class="options"><a style="text-decoration: none; color: black" onclick="confirmaExclusaoServico(<?= $row_servico['id_servico'] ?>)" href="#"><i class="fa-solid fa-trash"  style="color: red"></i></a></td>
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