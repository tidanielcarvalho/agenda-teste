$(document).ready(function() {
    $('#example').DataTable({
        "pageLength": 10,
        "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
        "order": [ [ 0, 'asc' ]],
        "language": {
            "lengthMenu": "Exibir _MENU_ registros por página",
            "search": "Pesquisar:",
            "paginate": {
                "previous": "Anterior",
                "next": "Próximo",
            },	
            "emptyTable": "Nenhum dado encontrado",
            "zeroRecords": "Informação não encontrada",
            "info": "Página _PAGE_ de _PAGES_",
            "infoFiltered": "(filtrado de _MAX_ registros encontrados)",
            "infoEmpty": "Informação não encontrada"
        },
    });
});