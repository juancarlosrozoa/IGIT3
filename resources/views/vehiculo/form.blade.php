<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $vehiculo->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idtipovehiculofk') }}
            {{ Form::select('idtipovehiculofk',$tipos, $vehiculo->idtipovehiculofk, ['class' => 'form-control' . ($errors->has('idtipovehiculofk') ? ' is-invalid' : ''), 'placeholder' => 'tipo de vehículo']) }}
            {!! $errors->first('idtipovehiculofk', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ingreso') }}
            {{ Form::text('ingreso', $vehiculo->ingreso, ['class' => 'form-control' . ($errors->has('ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Ingreso']) }}
            {!! $errors->first('ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadoingreso') }}
            {{ Form::text('estadoingreso', $vehiculo->estadoingreso, ['class' => 'form-control' . ($errors->has('estadoingreso') ? ' is-invalid' : ''), 'placeholder' => 'Estadoingreso']) }}
            {!! $errors->first('estadoingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salida') }}
            {{ Form::text('salida', $vehiculo->salida, ['class' => 'form-control' . ($errors->has('salida') ? ' is-invalid' : ''), 'placeholder' => 'Salida']) }}
            {!! $errors->first('salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadosalida') }}
            {{ Form::text('estadosalida', $vehiculo->estadosalida, ['class' => 'form-control' . ($errors->has('estadosalida') ? ' is-invalid' : ''), 'placeholder' => 'Estadosalida']) }}
            {!! $errors->first('estadosalida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>