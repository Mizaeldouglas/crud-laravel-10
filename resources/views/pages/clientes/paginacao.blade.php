

@extends('index')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
    </div>

    <div>
        <form action="{{route('clientes.index')}}" method="get">
            <label>
                <input
                        type="text"
                        name="pesquisar"
                        placeholder="Digite o Nome"
                />
            </label>
            <button type="submit" class="btn btn-dark">Pesquisar</button>
            <a type="button" href="{{route('cadastrar.clientes')}}" class="btn btn-success float-md-right">
                Incluir Cliente
            </a>

        </form>

        <div>
            <div class="table-responsive">
                @if($findClientes->isEmpty())

                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Endereço</th>
                            <th>Logradouro</th>
                            <th>Cep</th>
                            <th>Bairro</th>
                            <th class="pl-md-5">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><strong>{{ strtoupper($pesquisar) ?? ''}} </strong> Dado inexistente</td>
                            <td>Dado inexistente</td>
                            <td>Dado inexistente</td>
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
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Endereço</th>
                            <th>Logradouro</th>
                            <th>Cep</th>
                            <th>Bairro</th>
                            <th class="">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($findClientes as $cliente)
                            <tr>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->email}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td>{{$cliente->logradouro}}</td>
                                <td>{{$cliente->cep}}</td>
                                <td>{{$cliente->bairro}}</td>
                                <td>
                                    <a href="{{route('atualizar.clientes',$cliente->id)}}" class="btn btn-light btn-sm mr-2">Editar</a>
                                    <a
                                            onclick="deleteRegistroPaginacao('{{route('clientes.delete')}}', {{$cliente->id}})"
                                            class="btn btn-danger btn-sm">
                                        Excluir
                                    </a>
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


