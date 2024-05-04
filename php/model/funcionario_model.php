<?php 

class FuncionarioModel {

    public $idFuncionario;
    public $nomeFuncionario;
    public $cpfFuncionario;
    public $salarioFuncionario;
    public $telefoneFuncionario;
    public $enderecoFuncionario;

    public function adicionarFuncionario() {

        include("../../conexao_db/conexao.php");

        $sql = "INSERT INTO tbl_funcionario VALUES (null, '$this->nomeFuncionario', '$this->cpfFuncionario','$this->salarioFuncionario','$this->telefoneFuncionario', '$this->enderecoFuncionario');";

        try {
            mysqli_query($conn, $sql);
            header("location: ../../menu/funcionarios_page/vizualizar_funcionarios.php");
        } catch(Exception $e) {
            die("Erro ao salvar funcionario: $e");

        }

    }

    public function buscarFuncionarios() {
        
        include("../../conexao_db/conexao.php");

        $sql = "SELECT * FROM tbl_funcionario";
        $result = mysqli_query($conn, $sql);

        try {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $funcionarios[] = $row;
                }

                return $funcionarios;
            }
        } catch (Exception $e) {
            die("Erro ao buscar funcionarios: $e");
        }

    }

    public function excluirFuncionario($id) {
    
        include ("../../conexao_db/conexao.php");

        $sql = "DELETE FROM tbl_funcionario WHERE id_funcionario=$id";

        try {
            mysqli_query($conn, $sql);
            header("location: ../../menu/funcionarios_page/vizualizar_funcionarios.php");
        } catch (Exception $e) {
            die("Erro ao excluir funcionario: $e");
        }
    }

    public function atualizarFuncionario($id) {

        include ("../../conexao_db/conexao.php");

        $sql = "UPDATE tbl_funcionario SET nome_funcionario='$this->nomeFuncionario', cpf_funcionario='$this->cpfFuncionario', salario_funcionario='$this->salarioFuncionario', telefone_funcionario='$this->telefoneFuncionario', endereco_funcionario='$this->enderecoFuncionario' WHERE id_funcionario='$id';";

        try {
            mysqli_query($conn, $sql);
            header("location: ../../menu/funcionarios_page/vizualizar_funcionarios.php");
        } catch (Exception $e) {
            die("Erro ao alterar funcionario: $e");
        }
        
    }

    public function buscarFuncionarioPorID($id) {
        include ("../../conexao_db/conexao.php");

        $sql = "SELECT * FROM tbl_funcionario WHERE id_funcionario = '$id'";
        $result = mysqli_query($conn, $sql);

        try {
            
            $funcionarios = mysqli_fetch_assoc($result);
            return $funcionarios;
        
        } catch (Exception $e) {
            die("Erro ao buscar funcionarios: $e");
        }
    }
}

?>