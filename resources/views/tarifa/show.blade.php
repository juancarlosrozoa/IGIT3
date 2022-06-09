@extends('layouts.app')

@section('template_title')
    {{ $tarifa->name ?? 'Show Tarifa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tarifa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tarifas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idtipovehiculofk:</strong>
                            {{ $tarifa->idtipovehiculofk }}
                        </div>
                        <div class="form-group">
                            <strong>Tarifa:</strong>
                            {{ $tarifa->tarifa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
