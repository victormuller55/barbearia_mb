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
        <div class="container-fluid">
          <div class="row">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark " style="width: 280px; height: 100vh">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4">Sidebar</span>
              </a>
              <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                    Orders
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                    Products
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                    Customers
                  </a>
                </li>
              </ul>
              <hr>
          	</div>
           <div>
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
            </div>
          </div>
      </div>
</body>
</html>