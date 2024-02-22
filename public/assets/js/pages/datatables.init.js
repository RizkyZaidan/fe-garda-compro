$(document).ready(function () {
    $("#datatable").DataTable(),
        $("#datatable-buttons")
            .DataTable({
                lengthChange: !1,
                buttons: [
                    {
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3, 4, 5, 6 , 7, 8]
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3, 4, 5, 6 , 7, 8]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3, 4, 5, 6 , 7, 8]
                        }
                    },
                    'colvis'
                ],
                bPaginate : true,
            })
            .buttons()
            .container()
            .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");

    $("#datatable").DataTable(),
        $("#datatable-buttons-monitoring")
            .DataTable({
                lengthChange: !1,
                buttons: [
                    {
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3, 4, 5, 6 , 7, 8, 9]
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3, 4, 5, 6 , 7, 8, 9]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3, 4, 5, 6 , 7, 8, 9]
                        }
                    },
                    'colvis'
                ],
                bPaginate : true,
            })
            .buttons()
            .container()
            .appendTo("#datatable-buttons-monitoring_wrapper .col-md-6:eq(0)");
});
