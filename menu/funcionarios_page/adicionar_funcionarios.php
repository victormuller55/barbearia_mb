<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../imagens/icon.png">
    <title>Adicionar Funcionarios | Scissor</title>
    <script src="https://kit.fontawesome.com/47e9777af5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/funcionarios.css">
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
            <form style="width:90%" class="p-3 " method="post" action="../../php/funcionarios_crud/funcionarios_post.php">
                <h4 class="mb-4 title">Cadastrar Novo Funcionario</h4>
                <hr>
                <input class="input mb-2" type="text" name="nome_funcionario" placeholder="Digite o Nome" required>
                <input class="input mb-2" type="text" name="cpf_funcionario" placeholder="Digite o CPF" required><br>
                <input class="input mb-2" type="text" name="salario_funcionario" placeholder="Digite o Salario" required>
                <input class="input mb-2" type="text" name="telefone_funcionario" placeholder="Digite o Telefone" required><br>
                <input class="input mb-2 endereco" type="text" name="endereco_funcionario" placeholder="Digite o Endereço" required><br>
                <button type="submit" class="btn btn-primary input form">CADASTRAR</button>
            </form>
        </div>
    </div>
</body>
</html>