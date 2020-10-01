$(document).ready(function() {
    var a = $("#datatable-buttons").DataTable({

        buttons: ["copy", "excel", "pdf", "colvis"]
    });

    a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")
});