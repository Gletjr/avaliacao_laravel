@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="btn">
                        <a class="btn btn-info" href="{{ route('empresas.index') }}" title="Adicionando Empresa">Listar Empresas<i class="fas fa-plus-circle"></i></a></div>
                        <a class="btn btn-success" href="{{ route('empresas.create') }}" title="Adicionando Empresa">Adicionar Empresa<i class="fas fa-plus-circle"></i></a></div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
