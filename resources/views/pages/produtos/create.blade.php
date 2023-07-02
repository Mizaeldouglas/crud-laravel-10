@extends('index')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar novo produto</h1>
    </div>

    <form method="POST" action="{{route('cadastrar.produtos')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input
                        type="text"
                        class="form-control @error('nome') is-invalid @enderror"
                        name="nome"
                        placeholder="Digite o Nome do Produto"
                >
                @error('valor') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('nome')}}</strong></p> @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Valor</label>

                <input
                        class="form-control @error('valor') is-invalid @enderror"
                        name="valor"
                        placeholder="Digite o Valor do Produto"
                >
                @error('valor') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('valor')}}</strong></p> @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>

@endsection