<?php 
include("../../php/model/servico_model.php");

$servico = new ServicoModel();
$servicos = $servico->buscarServicos()

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title>Home | Scissor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../imagens/logo.png">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/services.css">

  </head>
<body>
  <div>

  </div>
           <div>
              <div class="container-fluid mb-3">
                <div class="row">
                    <button class="btn btn-primary button-table shadow-none" type="submit">Apagar</button>
                    <a href="adicionar_services.php"><button class="btn btn-primary button-table shadow-none" type="submit">Adicionar</button></a>
                    <button class="btn btn-primary button-table shadow-none" type="submit">Filtros</button>
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
                    <th></th>
                    <th></th>
                  </tr>
                </thead>

                <?php foreach ($servicos as $row_servico) :?>

                <tbody>
                  <tr>
                    <td><?=$row_servico['nome_servico']?></td>
                    <td><?=$row_servico['funcionario_servico']?></td>
                    <td><?=$row_servico['servico']?></td>
                    <td><?=$row_servico['data_hora']?></td>
                    <td><?=$row_servico['obs_servico']?></td>
                    <td><a href="">Alterar</a></td>
                    <td><a href="">Excluir</a></td>
                  </tr>
                </tbody>

                <?php endforeach;?>
              </table>
      </div>
</body>
</html>