@extends('layouts.auth')

@section('content')
    <div class="row justify-content-left pl-3 pb-3">
        <div class="col-md-8 pt-3">
            <h2>WELCOME TO OUR SYSTEM</h2>
        </div>
    </div>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
@endsection
@section('scripts')
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="/js/dashboard-charts.js"></script>
@endsection
