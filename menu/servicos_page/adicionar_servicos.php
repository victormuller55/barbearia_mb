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

        input[type="text"] {

        }
    </style>
</head>
<body>
    <h1>Agendamento</h1>    

    <form  method="post" action="../../php/servicos.php">
        <input type="text" name="cliente_servico" placeholder="Digite o nome do cliente"><br>
        <input type="text" name="funcionario_servico" placeholder="Digite o nome do funcionário"><br>
        <input type="text" name="servico" placeholder="Digite o serviço"><br>
        <input type="text" name="data_hora" placeholder="Digite a data/hora"><br>
        <input type="text" name="obs" placeholder="Observaçôes"><br>
        <input type="submit">
    </form>
</body>
</html>