new DataTable('#dataTable', {
    ajax: api,
    processing: true,
    serverSide: true,
    dom: '<"top"Bfrtip<"clear">',
    columns: columns,
    buttons: [
        {
            extend: "excel",
            title: "Class Schedule Plotting System",
            className: "btn btn-primary",
            text: '<i class="fa fa-file-excel"></i> EXCEL',
        },
        {
            extend: "pdf",
            title: "Class Schedule Plotting System",
            className: "btn btn-primary",
            text: '<i class="fa fa-file-pdf"></i> PDF',
        },
        {
            extend: "print",
            className: "btn btn-primary",
            text: '<i class="fa fa-print"></i> Print',
            title: "Class Schedule Plotting System",
            autoPrint: true,
            exportOptions: {
                columns: ":visible",
                columns: ":not(:last-child)"
            },
            customize: function (win) {
                // Add logo and institution information
                var logoAndInfo = '<div class="row">' +
                    '<div class="col-md-8 col-xl-7 text-center text-primary mx-auto">' +
                    '<img src="assets/img/icon.png" width="100em">' +
                    '<h4 class="mt-1"><strong>Eastern Mindanao College of Technology Inc. EMCOTECH</strong></h4>' +
                    '<p class="w-lg-50">RCJM+2F7, Pagadian City, Zamboanga del Sur<br>' +
                    'Call No. : <strong>0987-181-5980</strong></p>' +
                    '</div>' +
                    '</div>';
                $(win.document.body).prepend(logoAndInfo);
                var table = $(win.document.body).find('table');
                table.prepend('<thead><tr><th colspan="15" style="text-align: center; font-size: 10px;"> Class attendance and Assessment across platform technology </th></tr><tr><th colspan="15" style="text-align: right;" id="dateTimeHeader"> Date: ' + new Date().toLocaleString() + '</th></tr></thead>');
                // Style adjustments
                $(win.document.body)
                    .find("table")
                    .addClass("display")
                    .css("font-size", "9px");
                $(win.document.body)
                    .find("tr:nth-child(odd) td")
                    .each(function (index) {
                        $(this).css("background-color", "#D0D0D0");
                    });
                $(win.document.body).find("h1").css({
                    "text-align": "center",
                    "margin-top": "10px",
                    "display": "none"
                });
            },
        },
    ],
    responsive: {
        details: {
            display: DataTable.Responsive.display.modal({
                header: function (row) {
                    var data = row.data();
                    return "Details for " + data[1];
                },
            }),
            renderer: DataTable.Responsive.renderer.tableAll({
                tableClass: "table",
            }),
        },
    },
});