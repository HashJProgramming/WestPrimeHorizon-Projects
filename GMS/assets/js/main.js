$(document).ready(function() {
    const currentPath = window.location.pathname;
    const urlParams = new URLSearchParams(window.location.search);
    const type = urlParams.get('type');
    const message = urlParams.get('message');

$('#dataTable').DataTable( {
    // dom: 'Blfrtip',
    dom: 'Bfrtip',
    aaSorting: [[0, 'desc']],
    columnDefs: [
        {
            target: 0,
            visible: false,
            searchable: false
        }],
    buttons: [
        { 
            extend: 'excel', 
            title: 'GMS - Guidance Monitoring System', 
            className: 'btn btn-primary',
            text: '<i class="fa fa-file-excel"></i> EXCEL'
        },
        {
            extend: 'pdf',
            title: 'GMS - Guidance Monitoring System', 
            className: 'btn btn-primary',
            text: '<i class="fa fa-file-pdf"></i> PDF'
        },
        { 
            extend: 'print', 
            className: 'btn btn-primary',
            text: '<i class="fa fa-print"></i> Print',
            title: 'GMS - Guidance Monitoring System', 
            autoPrint: true,
            exportOptions: {
                columns: ':visible',
            },
            customize: function (win) {
                $(win.document.body).find('table').addClass('display').css('font-size', '9px');
                $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
                    $(this).css('background-color','#D0D0D0');
                });
                $(win.document.body).find('h1').css('text-align','center');
            }
        }
    ]
} );

} );

