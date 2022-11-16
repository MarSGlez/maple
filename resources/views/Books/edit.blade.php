{{-- layout extend --}}
@extends('layouts.app')

{{-- page title --}}
@section('title', 'Servicios')


@section('content')
<div class="seaction">
    <div class="row">
        <!-- Form Advance -->
        <div class="col s12 m12 l12">
            <div id="Form-advance" class="card card card-default scrollspy">
                <div class="card-content">
                    <h4 class="card-title">Servicios</h4>
                    {!! Form::open(['route'=>['servicios.update',$servicio->id], 'method'=>'PUT','role' => 'form', 'id' => 'frmServicios']) !!}
                    @include('Servicios._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection