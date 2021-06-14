@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Projeto Parque Tecnológico - Lista de Empresas </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('empresas.create') }}" title="Adicionando Empresa">Adicionar Empresa<i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Id</th>
            <th>Nome Empresa</th>
            <th>Complexo Local</th>
            <th>Aluguel</th>
            <th>Criado em</th>
            <th width="25%">Ações</th>
        </tr>
        @foreach ($empresas as $empresa)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $empresa->nome_empresa }}</td>
                <td>{{ $empresa->local }}</td>
                <td>{{ $empresa->aluguel }}</td>
                <td>{{ $empresa->created_at }}</td>
                <td>
                    <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">
       
                        <a class="btn btn-info" href="{{ route('empresas.show',$empresa->id) }}">Mostrar</a>
        
                        <a class="btn btn-primary" href="{{ route('empresas.edit',$empresa->id) }}">Alterar</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Apagar</button>
                    </form>
                </td>
               </tr>
        @endforeach
    </table>

    {!! $empresas->links() !!}
</div>

@endsection
