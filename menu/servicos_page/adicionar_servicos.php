<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento da Serviços | Scissor</title>
    <link rel="shortcut icon" type="image/png" href="../../imagens/icon.png">
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
            <div class="sidebar">
               <ul style="list-style: none;">
                    <li><a style="text-decoration: none; color: white;" href="#"><div class="option mt-5"><i class="fa-solid fa-house mr-3 ml-2"></i>Inicio</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="../servicos_page/vizualizar_servicos.php"><div class="option"><i class="fa-solid fa-scissors mr-3 ml-2"></i>Serviços</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="../funcionarios_page/vizualizar_funcionarios.php"><div class="option"><i class="fa-solid fa-users mr-3 ml-2"></i>Funcionarios</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="../perfil_page/perfil.php"><div class="option"><i class="fa-solid fa-user mr-3 ml-2"></i>Meu Perfil</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="#"><div class="option"><i class="fa-solid fa-right-from-bracket mr-3 ml-2"></i>Sair da Conta</div></a></li>
               </ul>
            </div>
            <form style="width:90%" class="p-3 " method="post" action="../../php/servicos_crud/servicos_post.php">
                <h3 class="mb-4 title">Agendamento de Serviços</h3>
                <hr>
                <input class="input mb-2" type="text" name="cliente_servico" placeholder="Digite o nome do cliente" required>
                <input class="input mb-2" type="text" name="funcionario_servico" placeholder="Digite o nome do funcionário" required><br>
                <input class="input mb-2" type="text" name="servico" placeholder="Digite o serviço" required>
                <input class="input mb-2" type="text" name="data_hora" placeholder="Digite a data/hora" required><br>
                <textarea row="3" class="input textarea mb-2" type="text" name="obs" placeholder="Observaçôes" required></textarea><br>
                <button type="submit" class="btn btn-primary input form">CADASTRAR NOVO SERVIÇO</button>
            </form>
        </div>
    </div>    
</body>
</html>