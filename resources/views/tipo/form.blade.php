<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipovehiculo') }}
            {{ Form::text('tipovehiculo', $tipo->tipovehiculo, ['class' => 'form-control' . ($errors->has('tipovehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Tipovehiculo']) }}
            {!! $errors->first('tipovehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>