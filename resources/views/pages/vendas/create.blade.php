@extends('index')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar novas Vendas</h1>
    </div>

    <form method="POST" action="{{route('cadastrar.vendas')}}">
        @csrf
        <div class="form-row col-md-6">
            <div class="form-group  ">
                <label>Numero da venda</label>
                <input
                        disabled
                        type="text"
                        class="form-control   @error('numero_da_venda') is-invalid @enderror"
                        name="numero_da_venda"
                        placeholder="Digite o numero da venda"
                        value="{{$findNumeracao}}"
                >
                @error('numero_da_venda') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('numero_da_venda')}}</strong></p> @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Nome do produto</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="produto_id">
                    <option selected>Selecione o Produto</option>
                    @foreach($findProduto as $produtos)
                        <option value="{{$produtos->id}}">{{$produtos->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Nome do Cliente</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="cliente_id" >
                    <option selected>Selecione o Cliente</option>
                    @foreach($findCliente as $Clientes)
                        <option value="{{$Clientes->id}}">{{$Clientes->nome}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>

@endsection