<div class="row">
    <div class="input-field col m6 s12">
        {!! Form::label('Nombre', 'Nombre: *', ['for' => 'servicios[nombre]']) !!}
        {!! Form::text('servicios[nombre]',(isset($servicio)) ?  $servicio->nombre  : null ,['class'=>'validate text-uppercase','required' => 'true']) !!}
        <span class="helper-text" data-error="El nombre es obligatorio">Nombre del servicio</span>
    </div>
    <div class="input-field col m4 s12">
        {!! Form::select('servicios[tipo_servicio_id]', isset($tipos_servicios) ? $tipos_servicios : [], (isset($servicio)) ?  $servicio->tipo_servicio_id : null, ['class'=>'validate text-uppercase', 'id' => 'tipo_servicio_id', 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
        {!! Form::label('tipo_servicio_id', 'Tipo de servicio: *') !!}
        <span class="helper-text" data-error="El campo es obligatorio" data-success="">Tipo de servicio</span>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <button class="btn btnLegislatura waves-effect waves-light blue breadcrumbs-btn right" href=" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
        <a href="{{route('servicios.index')}}" class="btn waves-effect waves-light right red accent-2">Cancelar <i class="material-icons right">cancel</i></a>
    </div>
</div>