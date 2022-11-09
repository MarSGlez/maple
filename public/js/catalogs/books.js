$(function() {
    $('#books_table').DataTable({
        processing: true,
        serverSide: true,
        columnDefs: [{
            "defaultContent": "-",
            "targets": "_all"
        }],
        ajax: {
            url: '/api/books'
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
                data: 'title',
                title: 'TITLE',
                overflow: 'visible',
                autoHide: false,
                name: 'title'
            },
            {
                data: 'category.name',
                title: 'CATEGORY',
                overflow: 'visible',
                autoHide: false,
            },
            {
                data: 'author.name',
                title: 'AUTHOR',
                overflow: 'visible',
                autoHide: false,
            },
            {
                data: 'release_date',
                title: 'RELEASE DATE',
                overflow: 'visible',
                autoHide: false

            },
            {
                data: 'publish_date',
                title: 'PUBLISH DATE',
                overflow: 'visible',
                autoHide: false,
            },
        ]
    });
});
