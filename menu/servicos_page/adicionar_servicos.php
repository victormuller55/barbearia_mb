<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
        
        h1 {
            text-align: center;
        }

        form {
            text-align: center;
        }

        input[type="submit"] {
            background-color: #2B488A;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #1c2f5b;
        }
    </style>
    <link rel="stylesheet" href="../../css/services.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
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
                    <li><a style="text-decoration: none; color: white;" href="vizualizar_servicos.php"><div class="option">Serviços</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="../funcionarios_page/vizualizar_funcionarios.php"><div class="option">Funcionarios</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="#"><div class="option">Meu Perfil</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="#"><div class="option">Sair da Conta</div></a></li>
               </ul>
            </div>
            <form class="p-3" method="post" action="../../php/servicos_crud/servicos_post.php">
                <h3 class="mb-4">Agendamento de Serviços</h3>
                <input class="input mb-2" type="text" name="cliente_servico" placeholder="Digite o nome do cliente" required>
                <input class="input mb-2" type="text" name="funcionario_servico" placeholder="Digite o nome do funcionário" required><br>
                <input class="input mb-2" type="text" name="servico" placeholder="Digite o serviço" required>
                <input class="input mb-2" type="text" name="data_hora" placeholder="Digite a data/hora" required><br>
                <textarea row="3" class="input textarea mb-2" type="text" name="obs" placeholder="Observaçôes" required></textarea><br>
                <input class="input mb-2" type="submit">
            </form>
        </div>
    </div>    
</body>
</html>