$(document).ready( function () {
    $('.houses-table').DataTable({
        pageLength: 25,
        language: {
            search: "Zoeken",
            infoFiltered: "",
            sZeroRecords: "Geen resultaten gevonden",
            sLengthMenu: "Toon  _MENU_ huizen",
            info: "Toont  _START_ tot _END_ van de  _TOTAL_ huizen",
            paginate: {
                "previous": "Vorige",
                "next": "Volgende"
            }
        }
    });
} );
