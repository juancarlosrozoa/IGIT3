<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idvehiculofk') }}
            {{ Form::select('idvehiculofk',$vehiculos, $pago->idvehiculofk, ['class' => 'form-control' . ($errors->has('idvehiculofk') ? ' is-invalid' : ''), 'placeholder' => 'Idvehiculofk']) }}
            {!! $errors->first('idvehiculofk', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celda') }}
            {{ Form::text('celda', $pago->celda, ['class' => 'form-control' . ($errors->has('celda') ? ' is-invalid' : ''), 'placeholder' => 'Celda']) }}
            {!! $errors->first('celda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $pago->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>