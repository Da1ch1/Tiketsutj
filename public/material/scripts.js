i



$(document).ready(function () {
    $('#example').DataTable({

        responsive: "true",
        dom: 'Bfrtilp',
        buttons: [
            
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf></i>',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger'
            }    
            
            
        ],
    });
});







    