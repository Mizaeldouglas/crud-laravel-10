@extends('index')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>

    <div>
        <form action="" method="get">
            <input
                    type="text"
                    name="pesquisar"
                    placeholder="Digite o Nome"
            />
            <button type="submit" class="btn btn-dark">Pesquisar</button>
            <a type="button" href="" class="btn btn-success float-md-right">
                Incluir Produto
            </a>

        </form>

        <div>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($findProdutos as $findProduto)
                        <tr>
                            <td>{{$findProduto->nome}}</td>
                            <td>{{'R$' . ' ' . number_format($findProduto->valor, 2 , ',' ,'.')}}</td>
                            <td >
                                <a href="#" class="btn btn-light btn-sm mr-2">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection