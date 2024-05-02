<?php 

class ServicoModel {
    
    public $cliente;
    public $funcionario;
    public $servico;
    public $dataHora;
    public $obs;

    public function adicionarServico() {

        include("../../conexao_db/conexao.php");

        $sql = "INSERT INTO tbl_servico VALUES (null, '$this->cliente', '$this->funcionario', '$this->servico', '$this->dataHora', '$this->obs')";

        try {
            mysqli_query($conn, $sql);
        } catch (Exception $e) {
            die("Erro ao agendar: $e");
        }   
    }

    public function buscarServicos() {

        include ("../../conexao_db/conexao.php");

        $sql = "SELECT * FROM tbl_servico";
        $result = mysqli_query($conn, $sql);
        $clientes = array();

        try {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $servicos[] = $row;
                }

                return $servicos;
            }
        } catch (Exception $e) {
            die("Erro ao buscar clientes: $e");
        }
    }

    public function excluirServico($id) {

        include ("../../conexao_db/conexao.php");

        try {
            $sql = "DELETE FROM tbl_servico WHERE id_servico=$id";
            mysqli_query($conn, $sql);
            header("location:../../options\services\services.php");
        } catch (Exception $e) {
            die("Erro ao excluir serviço: $e");
        }

    }


}
?>