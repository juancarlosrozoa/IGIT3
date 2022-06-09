<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idtipovehiculofk') }}
            {{ Form::select('idtipovehiculofk',$tipos, $tarifa->idtipovehiculofk, ['class' => 'form-control' . ($errors->has('idtipovehiculofk') ? ' is-invalid' : ''), 'placeholder' => 'Idtipovehiculofk']) }}
            {!! $errors->first('idtipovehiculofk', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tarifa') }}
            {{ Form::text('tarifa', $tarifa->tarifa, ['class' => 'form-control' . ($errors->has('tarifa') ? ' is-invalid' : ''), 'placeholder' => 'Tarifa']) }}
            {!! $errors->first('tarifa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>