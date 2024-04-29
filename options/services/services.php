<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title>Home | Scissor</title>'
'   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../imagens/logo.png">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/services.css">

  </head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg header">
        <div class="container">
          <a href="services.php"><img src="..\imagens\logo.png" alt="" width="40"></a>
          <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="../imagens/icons/menu.png" alt="">
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link text-white font-header-options scroll-link nav-option" href="services.php">Serviços</a></li>
              <li class="nav-item"><a class="nav-link text-white font-header-options scroll-link nav-option mr-5" href="employees.php">Funcionarios</a></li>
              <li class="nav-item"><a id="sair" class="nav-link text-white font-header-options scroll-link nav-option" href="../php/sair.php">Sair da conta</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <main class="p-3">
        <div class="container-fluid mb-3">
          <div class="row">
              <button class="btn btn-primary button-table shadow-none" type="submit">Apagar</button>
              <button class="btn btn-primary button-table shadow-none" type="submit">Adicionar</button>
              <button class="btn btn-primary button-table shadow-none" type="submit">Filtros</button>
          </div>
        </div>
        <table border="1">
          <thead>
            <tr>
              <th>N° do Serviço</th>
              <th>Nome</th>
              <th>Funcionario</th>
              <th>Serviço</th>
              <th>Hora / Data</th>
              <th>Observações</th>
              <th>Editar serviço</th>
              <th>Excluir serviço</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Victor Muller</td>
              <td>Vitor Bertoldo</td>
              <td>Corte de Cabelo</td>
              <td>27/04/2023 13:00</td>
              <td>Cortar Certo</td>
              <td><a href="">Alterar</a></td>
              <td><a href="">Excluir</a></td>
            </tr>
          </tbody>
        </table>
      </main>
    </header>
</body>
</html>