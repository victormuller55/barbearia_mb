function confirmaExclusaoServico(id) {
    
    console.log("Passo aqui");

    if (confirm("Você realmente deseja excluir este serviço?")) {
        window.location.assign("../../php/servicos_crud/servicos_delete.php?id_servico=" + id);
    }
}