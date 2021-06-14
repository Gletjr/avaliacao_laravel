@extends('layouts.app')
  
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar empresa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Eita!</strong> Tem algum problema nisso.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('empresas.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome Empresa:</strong>
                <input type="text" name="nome_empresa" class="form-control" placeholder="Nome Empresa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Local de Instalação:</strong>
                <textarea class="form-control" style="height:150px" name="local" placeholder="Local de Instalação"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aluguel:</strong>
                <input type="text" name="aluguel" class="form-control" placeholder="Vr Aluguel">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Gravar</button>
        </div>
    </div>
   
</form>
</div>
@endsection