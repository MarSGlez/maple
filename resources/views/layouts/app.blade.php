
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="{{url('')}}"/>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

</head>


<style>
    :root {
        --primary: #960048;
        --light: #B1B1B1;
        --grey: #eFeFeF;
        --light-blue: #F5F6FA;
    }


    thead {
        background-color: #960048 !important;
        color: #ffffff !important;
    }

    .ayuda {
        font-size: 0.7rem;
    }

    p {
        margin-block-end: .4em;
    }


    h1, h2, h3, h4, h5, h6 {
        color: var(--primary);
        font-weight: 600;
        color: #960048 !important;
        font-size: 1.1rem !important;
    }


    @font-face {
        font-family: "San Francisco";
        font-weight: 400;
        src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-regular-webfont.woff");
    }

    body {
        font-size: 0.8rem;
        font-family: "San Francisco";
        font-style: normal;
    }

    .form-control {
        font-size: 0.8rem !important;
    }

    .btn-warning {
        color: #ffffff;
        background: rgb(118, 119, 123);
        border-color: rgb(118, 119, 123);
    }

    .btn-warning:hover {
        color: #ffffff;
        background: rgb(140, 140, 144);
        border-color: rgb(140, 140, 144);
    }

    .btn-danger {
        color: #fff;
        background: rgb(141, 41, 91);
        border-color: rgb(141, 41, 91);
    }


    .btn-secondary {
        color: #fff;
        background-color: rgb(135, 136, 138);
        border-color: rgb(135, 136, 138);
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #adb5bd;
        border-color: #adb5bd;
    }

    .btn-danger:hover {
        color: #fff;
        background: rgb(167, 59, 113);
        border-color: rgb(167, 59, 113);
    }

    .badge-success {
        color: #fff;
        background-color: #898A8D;
    }

    input::placeholder {
        color: #B1B1B1 !important;
        font-size: 0.8em;
        letter-spacing: 1px;

    }

    .text-muted {
        color: var(--primary) !important;
        opacity: .7;
    }

    .bg-light {
        background-color: var(--primary) !important;
    }

    .bg-light-blue {
        background-color: var(--light-blue) !important;
    }

    .shadow-sm {
        box-shadow: 0 0 1.25rem rgba(11, 37, 75, .05);
    }

    .shadow-hover {
        transition: 1s ease-in-out;
    }

    .shadow-hover:hover {
        transition: 1s ease-in-out;
        box-shadow: 0 .5rem 1rem rgba(11, 37, 75, .10) !important;
    }

    .circle {
        width: 50px;
        height: 50px;
    }

    .badge {
        padding: .5rem 1rem;
    }

    .bg-primary, .badge-primary {
        background-color: rgba(0, 123, 255, .1) !important;
    }

    .avatar {
        max-width: 35px;
    }

    .btn-primary {
        background-color: rgba(0, 123, 255, .1) !important;
        border: 0;
    }

    .btn-primary:hover {
        background-color: rgba(0, 123, 255, .2) !important;
    }

    .badge-secondary {
        background-color: var(--grey);
        color: var(--primary);
    }

    #content {
        overflow-y: auto;
        height: 100vh;
    }

    table {
        border-collapse: separate;
        border-spacing: 0 .5rem;
    }

    table thead th {
        border: 0 !important;
        background-color: var(--primary);
    }

    table tbody tr {
        background-color: var(--light);
    }

    table tbody td {
        border-top: 0 !important;
        line-height: 1.2;

    }

    /*---------------------------------
    sidebar
    ----------------------*/

    #sidebar-wrapper {
        z-index: 1000;
        height: 100%;
        width: 0px;
        left: -50px;
        overflow-y: auto;
        overflow-x: hidden;
        background: #960048;
        transition: all 0.5s ease;
    }

    #sidebar-wrapper::-webkit-scrollbar {
        width: 8px;
        background: #960048;
    }

    #sidebar-wrapper::-webkit-scrollbar-thumb {
        background-color: #989898;
        border-radius: 10px;
    }


    .sidebar-brand {
        font-weight: 600;
        font-size: 1.15rem;
        padding: 1.15rem 1.5rem;
        display: block;
        color: #f8f9fa;
    }

    .sidebar-header {
        text-transform: capitalize;
        padding: 1.5rem 1.5rem .375rem !important;
        font-size: 14px;
        color: #ced4da;
    }

    .navbar-nav > li > a, .submenu-box ul li a {
        color: white !important;
        font-size: 12px;
        padding: 5px 5px 5px 15px !important;
        display: block;
        font-weight: 200;
        position: relative;
        z-index: 2;
        font-family: 'Roboto', sans-serif;
        letter-spacing: .1px;
    }

    .submenu-box ul li a {
        padding: 4px 10px 4px 20px !important;
        color: #c1c1c1 !important;
    }


    .navbar-nav > li > a.active {
        color: #e9ecef !important;
        background: #960048;
        border-left: 4px solid white;
    }

    .navbar-nav .has-sub > a.collapsed::after {
        transition: 0.4s ease;
    }

    .navbar-nav .has-sub > a.collapsed::after {
        color: white;
        font-size: 10px;
        content: "\f078";
    }

    .navbar-nav .has-sub > a.collapsed::after {
        color: white;
    }

    .navbar-nav .has-sub > a::after {
        position: absolute;
        right: 0px;
        top: 50%;
        height: 30px;
        width: 30px;
        text-align: center;
        color: white;
        display: block;
        content: "\f077";
        font-family: 'Font Awesome\ 5 Free';
        font-weight: 900;
        font-size: 13px;
        line-height: 30px;
        margin-top: -15px;
    }


    #wrapper.toggled {
        padding-left: 270px;
    }


    .toggled#sidebar-wrapper {
        width: 270px !important;
        height: 100%;
        left: 0px;
        overflow-y: auto;
        overflow-x: hidden;
        transition: all 0.5s ease;
    }

    .navbar-nav li {
        display: block !important;
        margin: 2px 0px;
    }


    .nav-item .nav-link {
        display: block;
        color: white !important;
        text-transform: capitalize;
        text-decoration: none;
        padding: 6px 10px;
        transition: 0.4s ease;

    }

    .navbar-nav > li > a i:before {
        margin: 0px 5px 0px 0px;
        font-size: 14px;
    }


    /*---------------------------------
    sidebar
    ----------------------*/


    /*---------------------------------
      main-content
    ----------------------*/

    #page-content-wrapper {
        width: 100%;
        transition: all 0.5s ease;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -270px;

        transition: all 0.5s ease;
    }

    .toggled#page-content-wrapper {
        margin-left: 270px;
        transition: all 0.5s ease;
    }

    @media only screen and (min-width: 992px) {
        .toggled#page-content-wrapper {
            width: calc(100% - 270px);
        }
    }

    /*---------------------------------
      main-content
    ----------------------*/


    /*---------------------------------
    cross-bar animation
    ----------------------*/


    .nav-icon1 {
        z-index: 999;
        position: relative;
        display: block;
        width: 23px;
        margin: 0px 30px 0px 25px;
        cursor: pointer;
        height: 25px;
    }


    .nav-icon1 span {
        position: absolute;
        top: 0;
        width: 100%;
        height: 3px;
        cursor: pointer;
        background-color: #960048;
        left: 0;
        transform: rotate(0deg);
        transition: .30s ease-in-out;
    }

    .nav-icon1:hover span:nth-of-type(1) {
        top: -3px
    }

    .nav-icon1:hover span:nth-of-type(3) {
        top: 19px;
    }

    .nav-icon1 span:nth-of-type(1) {
        top: 0;
    }

    .nav-icon1 span:nth-of-type(2) {
        top: 8px;
    }

    .nav-icon1 span:nth-of-type(3) {
        top: 16px;
    }

    .nav-icon1.open span:nth-of-type(1) {
        top: 8px;
        transform: rotate(135deg);
    }

    .nav-icon1.open span:nth-of-type(2) {
        top: 8px;
        opacity: 0;
        left: -30px;
    }

    .nav-icon1.open span:nth-of-type(3) {
        top: 8px;
        transform: rotate(-135deg);
    }


    /*---------------------------------
    cross-bar animation
    ----------------------*/


    /*---------------------------------
    header navbar design
    ----------------------*/
    .my-navbar {
        padding: 0px;
        background-color: #960048;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .16);
    }

    .text-white-600 {
        color: #858796 !important;
    }

    .nav-link .img-profile {
        height: 40px;
        width: 40px;
    }

    .navbar-nav > li > a > i {
        font-size: 18px;
        color: #b3b3b3;
        margin: 8px 0px 0px 0px;
        padding: 0px;
    }

    .badge-counter {
        position: absolute;
        transform: scale(.7);
        transform-origin: top right;
        right: 6px;
        margin-top: 4px;
    }


    .dropdown, .dropleft, .dropright, .dropup {
        position: relative;
    }

    .nav-flag, .nav-icon {
        padding: .1rem .8rem;
        display: block;
        font-size: 1.5rem;
        color: #6c757d;
        transition: background .1s ease-in-out, color .1s ease-in-out;
        line-height: 1.4;
    }


    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-nav .dropdown-menu {
        box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, .05);
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none;
    }

    .dropdown-menu-lg {
        min-width: 20rem;
    }


    .position-relative {
        position: relative !important;
    }

    .nav-item .indicator {
        background: #3b7ddd;
        box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, .05);
        border-radius: 50%;
        display: block;
        height: 18px;
        width: 18px;
        padding: 1px;
        position: absolute;
        top: 0;
        right: -8px;
        text-align: center;
        transition: top .1s ease-out;
        font-size: .675rem;
        color: #fff;
    }

    /*---------------------------------
     header navbar design
    ----------------------*/


    /*---------------------------------
    main-top card
    ----------------------*/

    .card {
        margin-bottom: 24px;
        border: none;
        box-shadow: 0 0 0.875rem 0 rgba(33, 37, 41, .05);
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }

    .card-title {
        font-size: .875rem;
        color: #495057;
    }

    .card-body h1 {
        font-size: 1.75rem;
        font-weight: 400;
        line-height: 1.2;
        color: #000;
    }


    .text-white-800 {
        color: #5a5c69 !important;
        font-size: 1.75rem;
        font-weight: 400;
        line-height: 1.2;
    }

    .shadow-sm {
        box-shadow: 0 .125rem .25rem 0 rgba(58, 59, 69, .2) !important;
    }


    .btn-sm {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
    }


    .font-16 {
        font-size: 16px;
    }


    /*---------------------------------
    main-top card
    ----------------------*/


    /*---------------------------------
    main-table
    ----------------------*/


    .m-r-10 {
        margin-right: 10px;
    }

    .btn-submit {
        background-color: var(--primary);
    }

        /* Style the tab */
    .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
    background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
    background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        }

        .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
        }

        .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        }

        .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        }

        input:checked + .slider {
        background-color: #2196F3;
        }

        input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
        border-radius: 34px;
        }

        .slider.round:before {
        border-radius: 50%;
        }


</style>
<body>
<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
        <div class="simplebar-content" style="padding: 0px;">
            <div class="logo">
                <div class="text-center mt-3">
                    
                    <h5 class="text-center text-light mt-2">Prueba</h5>
                </div>
            </div>
            <ul class="navbar-nav align-self-stretch">
                    <ul class="list-unstyled m-0">
                        <div class="menu list-group-flush">
                            <a  href="{{route('books.index')}}" class="nav-tabs nav-link text-light ml-4 mr-3">
                               Book
                            </a>
                          
                        </div>
                    </ul>
                    
            
                
            </ul>
        </div>
    </nav>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div id="content">
            <div class="container-fluid p-0 px-lg-0 px-md-0">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light my-navbar">
                    <!-- Sidebar Toggle (Topbar) -->
                    <div type="button" id="bar" class="ml-4 btn btn-lg"
                         data-toggle="offcanvas">
                        <i class="ion ion-android-menu btn-lg text-light"></i>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- Topbar Navbar -->
                    
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div id="content" class="container-fluid p-5">
                    <section class="py-3">
                        @yield("content")
                    </section>
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>

<!-- Bootstrap y JQuery -->
<script src="{{asset('js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

    var datatable_esp = {
        "processing": true,
        "pageLength": 10,
        "dom": 'lBfrtip',
        "buttons": [{
            extend: 'collection',
            text: 'Export',
            buttons: [
                'copy',
                'excel',
                'csv',
                'pdf',
                'print'
            ]
        }],
        "language": {
            "sProcessing":    "Procesando...",
            "sLengthMenu":    "Mostrar _MENU_ registros",
            "sZeroRecords":   "No se encontraron resultados",
            "sEmptyTable":    "Ningún dato disponible en esta tabla",
            "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":   "",
            "sSearch":        "Buscar:",
            "sUrl":           "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":    "Último",
                "sNext":    "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "button": "csv"
    };

    $(document).ready(function () {
        $('#bar').click(function () {
            $(this).toggleClass('close');
            $('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled');
        });
        $('#bar').click();

        
    });


</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>
@yield("scripts")
</body>
</html>
