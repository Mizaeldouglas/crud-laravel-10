

@extends('index')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
    </div>

    <div>
        <form action="{{route('vendas.index')}}" method="get">
            <label>
                <input
                        class="form-control form-control-dark mw-100 "
                        type="text"
                        name="pesquisar"
                        placeholder="Numero da Venda"
                />
            </label>
            <button type="submit" class="btn btn-dark">Pesquisar</button>
            <a type="button" href="{{route('cadastrar.vendas')}}" class="btn btn-success float-md-right">
                Incluir Venda
            </a>

        </form>

        <div>
            <div class="table-responsive">
                @if($findVendas->isEmpty())

                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Numero da venda</th>
                            <th>Nome do Produto</th>
                            <th>Nome do Cliente</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><strong>{{ strtoupper($pesquisar) ?? ''}} </strong> Dado inexistente</td>
                            <td>Dado inexistente</td>
                            <td>Dado inexistente</td>
                            <td>Dado inexistente</td>
                            <td>Dado inexistente</td>
                        </tr>
                        </tbody>
                    </table>
                @else
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Numero da venda</th>
                            <th>Nome do Produto</th>
                            <th>Nome do Cliente</th>
                            <th>Acões</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($findVendas as $vendas)
                            <tr>
                                <td>{{$vendas->numero_da_venda}}</td>
                                <td>{{$vendas->produto->nome}}</td>
                                <td>{{$vendas->cliente->nome}}</td>
                                <td>
                                    <a href="{{route('vendas.enviarComprovanteEmail',$vendas->id)}}" class="btn btn-light btn-sm mr-2">Enviar E-mail</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                @endif
            </div>
        </div>
    </div>

    <!-- Coloque a tag meta fora do loop, preferencialmente dentro da tag <head> do HTML -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Certifique-se de incluir o Chart.js se estiver usando-o -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4"></script>
    {!! Toastr::message() !!}

@endsection


