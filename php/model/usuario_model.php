<?php 
class UsuarioModel {
    
    public $id;
    public $nome;
    public $email;
    public $senha;

    public function login() {

        include ("../conexao_db/conexao.php");
        
        try {

            $sql = "SELECT * FROM tbl_usuario WHERE email_usuario='$this->email'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) { 

                $user = mysqli_fetch_array($result);

                if ($this->senha == $user["senha_usuario"]) {

                    session_start();

                    $_SESSION["nome"] = $user["nome_usuario"];
                    $_SESSION["email"] = $user["email_usuario"];

                    return $user;
                } else {
                    echo "Senha incorreta.";
                }

            } else {
                echo "E-mail não cadastrado.";
            }
        } catch (Exception $e) {
            die("Erro ao encontrar usuário: $e");
        }
    }
}
?>