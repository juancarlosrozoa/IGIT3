@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? 'Show Pago' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idvehiculofk:</strong>
                            {{ $pago->idvehiculofk }}
                        </div>
                        <div class="form-group">
                            <strong>Celda:</strong>
                            {{ $pago->celda }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $pago->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
