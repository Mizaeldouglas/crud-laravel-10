@extends('index')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Produtos Cadastrados</h5>
                    <p class="card-text">Total de Produtos cadastrado no sistema.</p>
                    <a href="{{route('produtos.index')}}" class="btn btn-primary">Total:  {{ $totalDeProdutosCadastrado}}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cliente Cadastrados</h5>
                    <p class="card-text">Total de Clientes cadastrado no sistema.</p>
                    <a href="{{route('clientes.index')}}" class="btn btn-primary">Total:  {{ $totalDeClienteCadastrado}}</a>
                </div>
            </div>

        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Usuarios Cadastrados</h5>
                    <p class="card-text">Total de Usuario cadastrado no sistema.</p>
                    <a href="{{route('usuarios.index')}}" class="btn btn-primary">Total:  {{ $totalDeUsuarioCadastrado}}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vendas Cadastrados</h5>
                    <p class="card-text">Total de Vendas cadastrado no sistema.</p>
                    <a href="{{route('vendas.index')}}" class="btn btn-primary">Total:  {{ $totalDeVendasCadastrado}}</a>
                </div>
            </div>

        </div>
    </div>

@endsection