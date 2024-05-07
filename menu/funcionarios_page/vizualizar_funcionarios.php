   <?php include("../../php/funcionarios_crud/funcionario_get.php");  ?>
   <!DOCTYPE html>
   <html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Funcionarios | Scissor</title>
      <link rel="shortcut icon" type="image/png" href="../../imagens/icon.png">
      <script src="../../script/confirmar_exclusao.js"></script>
      <script src="https://kit.fontawesome.com/47e9777af5.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="../../css/menu.css">
      <link rel="stylesheet" href="../../css/bootstrap.css">
      <link rel="stylesheet" href="../../css/funcionarios.css">
   </head>
   <body>
   <header>
      <nav class="navbar navbar-light justify-content-between header-mb">
         <img src="../../imagens/logo.png" alt="" class="logo">
         <a href="adicionar_funcionarios.php"><button class="btn btn-primary button-adicionar shadow-none" type="submit">NOVO FUNCIONARIO<i class="fa-solid fa-plus ml-2"></i></button></a>
      </nav>
   </header>
   <div class="container-fluid">
      <div class="row flex-row">
         <div class="sidebar d-none d-md-block">
          <ul style="list-style: none;">
               <li><a style="text-decoration: none; color: white;" href="../home_page/home.php"><div class="option mt-5"><i class="fa-solid fa-house mr-3 ml-2"></i>Inicio</div></a></li>
               <li><a style="text-decoration: none; color: white;" href="../servicos_page/vizualizar_servicos.php"><div class="option"><i class="fa-solid fa-scissors mr-3 ml-2"></i>Serviços</div></a></li>
               <li><a style="text-decoration: none; color: white;" href="#"><div class="option"><i class="fa-solid fa-users mr-3 ml-2"></i>Funcionarios</div></a></li>
               <li><a style="text-decoration: none; color: white;" href="../perfil_page/perfil.php"><div class="option"><i class="fa-solid fa-user mr-3 ml-2"></i>Meu Perfil</div></a></li>
          </ul>   
        </div>
        <div class="p-3" style="width:90%">
            <div class="row justify-content-between pr-3 pl-3">
               <h3 class="title">Funcionarios</h3>
               <form class="form-inline" action="#" method="GET">
                  <input class="pl-2 mr-2 search-form" type="search" name="query" placeholder="Digite algo para pesquisar..." aria-label="Search">
                  <button type="submit" class="btn btn-primary search-button"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
               </form>
            </div>
            <hr>
            <table border="1">
            <thead>
               <tr>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Salario</th>
                  <th>Telefone</th>
                  <th>Endereço</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
               </tr>
            </thead>
               <tbody>
               <?php

               if (empty($funcionarios)) : ?>
                  <tr>
                        <td colspan="7">Nenhum funcionario encontrado.</td>
                  </tr>
               <?php else : ?>
                  <?php foreach ($funcionarios as $row_funcionarios) : 
                     $idFuncionario = $row_funcionarios['id_funcionario'];
                     include '../../php/funcionarios_crud/load_imagem_funcionario.php';
                     ?>
                        <tr>
                           <td><?= $row_funcionarios['nome_funcionario'] ?></td>
                           <td><?= $row_funcionarios['cpf_funcionario'] ?></td>
                           <td><?= $row_funcionarios['salario_funcionario'] ?></td>
                           <td><?= $row_funcionarios['telefone_funcionario'] ?></td>
                           <td><?= $row_funcionarios['endereco_funcionario'] ?></td>
                           <td class="options"><img width="25" height="25" class="rounded" src="<?=$imagem;?>" alt=""></td>
                           <td class="options"><a style="text-decoration: none; color: black"href="atualizar_funcionarios.php?id_funcionario=<?= $row_funcionarios['id_funcionario'] ?>"><i class="fa-solid fa-pen"></i></a></td>
                           <td class="options"><a style="text-decoration: none; color: black"href="atualizar_funcionarios.php?id_funcionario=<?= $row_funcionarios['id_funcionario'] ?>"><i class="fa-solid fa-trash"  style="color: red"></i></a></td>
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