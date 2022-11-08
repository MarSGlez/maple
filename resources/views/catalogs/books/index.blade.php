@extends('layouts.auth')

@section('content')
    <div class="row justify-content-center pt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Our Books') }} - This datatable is with laravel-datatables-oracle SERVER SIDE!!!</div>

                <div class="card-body">
                    <table id="books_table" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>CATEGORY</th>
                            <th>AUTHOR.</th>
                            <th>RELEASE DATE</th>
                            <th>PUBLISH DATE</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="/js/catalogs/books.js"></script>
@endsection
