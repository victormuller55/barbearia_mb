function confirmaExclusaoServico(id) {
    if (confirm("Você realmente deseja excluir este serviço?")) {
        window.location.assign("../../php/servicos_crud/servicos_delete.php?id_servico=" + id);
    }
}

function confirmaExclusaoFuncionario(id) {

    if (confirm("Você realmente deseja excluir este funcionario?")) {
        window.location.assign("../../php/funcionarios_crud/funcionarios_delete.php?id_funcionario=" + id);
    }
}