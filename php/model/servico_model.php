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
            header("location:../../menu/servicos_page/vizualizar_servicos.php");
        } catch (Exception $e) {
            die("Erro ao agendar: $e");
        }   
    }

    public function buscarServicos() {

        include ("../../conexao_db/conexao.php");

        $sql = "SELECT * FROM tbl_servico";
        $result = mysqli_query($conn, $sql);


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
            header("location: ../../menu/servicos_page/vizualizar_servicos.php");
        } catch (Exception $e) {
            die("Erro ao excluir serviço: $e");
        }
    }

    public function buscarServicoPorID($id) {
        include ("../../conexao_db/conexao.php");

        $sql = "SELECT * FROM tbl_servico WHERE id_servico = '$id'";
        $result = mysqli_query($conn, $sql);

        try {
            
            $servico = mysqli_fetch_assoc($result);
            return $servico;
        
        } catch (Exception $e) {
            die("Erro ao buscar serviços: $e");
        }
    }


    public function buscarServico($query) {
        include("../../conexao_db/conexao.php");
    
        $sql = "SELECT * FROM tbl_servico WHERE 
                cliente_servico LIKE '%$query%' OR 
                funcionario_servico  LIKE '%$query%' OR 
                servico LIKE '%$query%' OR 
                data_hora LIKE '%$query%' OR 
                obs_servico LIKE '%$query%'";
    
        try {
            $result = mysqli_query($conn, $sql);
        
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } catch(Exception $e) {
            die("Erro ao buscar serviços: $e");
        }
    } 

    public function atualizarServico($id) {

        include ("../../conexao_db/conexao.php");

        $sql = "UPDATE tbl_servico SET cliente_servico='$this->cliente', funcionario_servico='$this->funcionario', servico='$this->servico', data_hora='$this->dataHora', obs_servico='$this->obs' WHERE id_servico='$id';";

        try {
            mysqli_query($conn, $sql);
            header("location: ../../menu/servicos_page/vizualizar_servicos.php");
        } catch (Exception $e) {
            die("Erro ao alterar serviço: $e");
        }
        
    }

}
?>