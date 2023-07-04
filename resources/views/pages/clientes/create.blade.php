@extends('index')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar novo Cliente</h1>
    </div>

    <form method="POST" action="{{route('cadastrar.clientes')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input
                        type="text"
                        class="form-control @error('nome') is-invalid @enderror"
                        name="nome"
                        placeholder="Digite o Nome do Cliente"
                        value="{{old('nome')}}"
                >
                @error('valor') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('nome')}}</strong></p> @enderror
            </div>
            <div class="form-group col-md-6">
                <label>E-mail</label>
                <input
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        placeholder="Digite o Email do cliente"
                        value="{{old('email')}}"
                >
                @error('email') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('email')}}</strong></p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Endereço</label>
                <input
                        class="form-control @error('endereco') is-invalid @enderror"
                        name="endereco"
                        placeholder="Digite o Endereço do cliente"
                        value="{{old('endereco')}}"
                >
                @error('email') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('email')}}</strong></p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Logradouro</label>
                <input
                        class="form-control @error('logradouro') is-invalid @enderror"
                        name="logradouro"
                        placeholder="Digite o Logradouro do cliente"
                        value="{{old('logradouro')}}"
                >
                @error('logradouro') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('logradouro')}}</strong></p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Cep</label>
                <input
                        class="form-control @error('cep') is-invalid @enderror"
                        name="cep"
                        placeholder="Digite o Cep do cliente"
                        value="{{old('cep')}}"
                >
                @error('cep') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('cep')}}</strong></p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Bairro</label>
                <input
                        class="form-control @error('bairro') is-invalid @enderror"
                        name="bairro"
                        placeholder="Digite o Bairro do cliente"
                        value="{{old('email')}}"
                >
                @error('bairro') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('bairro')}}</strong></p> @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection