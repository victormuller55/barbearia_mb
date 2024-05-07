<?php include '../../php/perfil_imagem/load_image.php'; ?>
<?php
session_start();
$nomeUsuario = $_SESSION["nome"]; 
$emailUsuario = $_SESSION["email"]; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../imagens/icon.png">
    <title>Meu Perfil | Scissor</title>
    <script src="https://kit.fontawesome.com/47e9777af5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/perfil.css">
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
            <div class="sidebar d-none d-md-block">
                <ul style="list-style: none;">
                    <li><a style="text-decoration: none; color: white;" href="../home_page/home.php"><div class="option mt-5"><i class="fa-solid fa-house mr-3 ml-2"></i>Inicio</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="../servicos_page/vizualizar_servicos.php"><div class="option"><i class="fa-solid fa-scissors mr-3 ml-2"></i>Serviços</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="../funcionarios_page/vizualizar_funcionarios.php"><div class="option"><i class="fa-solid fa-users mr-3 ml-2"></i>Funcionarios</div></a></li>
                    <li><a style="text-decoration: none; color: white;" href="#"><div class="option"><i class="fa-solid fa-user mr-3 ml-2"></i>Meu Perfil</div></a></li>
                </ul>
            </div>
            <div style="width: 90%" class="p-4">
              <div class="card">
                <div class="card-body row">
                  <div>
                    <img class="imagem-perfil mr-3 ml-3" src="<?php echo $imagem;?>" alt="">
                    <form id="uploadForm" class="escolher-imagem" action="../../php/perfil_imagem/upload_imagem.php" method="POST" enctype="multipart/form-data">
                        <input type="file" id="imagem" name="imagem" accept="image/*">
                    </form>
                  </div>                  
                  <div>
                    <h5 style="color: #2B488A" class="font-weight-bold"><?=$nomeUsuario?></h5>
                    <p><?=$emailUsuario?></p>
                    <a href="../../php/logout.php"><button class="button-sair shadow-none" type="submit">SAIR DA CONTA<i class="fa-solid fa-right-from-bracket ml-2"></i></button></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</body>
<script>
        document.getElementById('imagem').addEventListener('change', function() {
            document.getElementById('uploadForm').submit();
        });

        document.querySelector('.imagem-perfil').addEventListener('click', function() {
            document.getElementById('imagem').click();
        });
</script>
</html>