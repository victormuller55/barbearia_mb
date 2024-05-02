<?php 

class ServicoModel {
    
    public $cliente;
    public $funcionario;
    public $servico;
    public $dataHora;
    public $obs;

    public function adicionarServico() {

        include("../connection/conn.php");

        $sql = "INSERT INTO tbl_servico VALUES (null, '$this->cliente', '$this->funcionario', '$this->servico', '$this->dataHora', '$this->obs')";

        try {
            mysqli_query($conn, $sql);
        } catch (Exception $e) {
            die("Erro ao agendar: $e");
        }   
    }

    public function buscarId() {
        
            include ("conn.php");
    
            try {
                $sql = "SELECT * FROM tbl_servico WHERE id_servico=$id";
                $result = mysqli_query($conn, $sql);
                $cliente = mysqli_fetch_array($result);
    
                return $cliente;
            } catch (Exception $e) {
                die("Erro ao buscar cliente: $e");
            }
        }
    }


?>