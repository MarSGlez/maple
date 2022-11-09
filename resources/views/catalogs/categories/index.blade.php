@extends('layouts.auth')

@section('content')
    <div class="row justify-content-center pt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Our Categories') }} - This datatable is manually!!!</div>

                <div class="card-body">
                    <table id="books_table" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="/js/catalogs/categories.js"></script>
@endsection
