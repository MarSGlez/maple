$(function() {
    $('#books_table').DataTable({
        processing: true,
        serverSide: true,
        columnDefs: [{
            "defaultContent": "-",
            "targets": "_all"
        }],
        ajax: {
            url: '/api/users'
        },
        dom: 'lBfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        columns: [
            {
                data: 'id',
                title: 'ID',
                overflow: 'visible',
                autoHide: false,
                name: 'id'
            },
            {
                data: 'name',
                title: 'NAME',
                overflow: 'visible',
                autoHide: false,
                name: 'name'
            },
            {
                data: 'email',
                title: 'EMAIL',
                overflow: 'visible',
                autoHide: false,
                name: 'email'
            }
        ]
    });
});
