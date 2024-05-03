<?php 
   include("../../php/model/servico_model.php");
   
   $servico = new ServicoModel();
   $servicos = $servico->buscarServicos()
   
   ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <title>Serviços | Scissor</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="../../imagens/logo.png">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="../../css/bootstrap.css">
      <link rel="stylesheet" href="../../css/services.css">
      <link rel="stylesheet" href="../../css/menu.css">
      <script src="../../script/confirmar_exclusao.js"></script>
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
            <div class="p-3" style="width:90%">
               <div class="container-fluid mb-3">
                  <div class="row">
                     <div>
                        <a href="adicionar_servicos.php"><button class="btn btn-primary button-table shadow-none text-white" type="submit">ADICIONAR</button></a>
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
                     <td><a style="text-decoration: none; color: black" href="">Alterar</a></td>
                     <td><a style="text-decoration: none; color: black" onclick="confirmaExclusaoServico(<?=$row_servico['id_servico']?>)" href="#">Excluir</a></td>
                  </tr>
               </tbody>
               <?php endforeach;?>
               </table>
            </div>
      </div>
   </div>
   </body>
</html>