@extends('index')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar novo Usuario</h1>
    </div>

    <form method="POST" action="{{route('cadastrar.usuarios')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input
                        type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        name="name"
                        placeholder="Digite o Nome do Usuario"
                        value="{{old('name')}}"
                >
                @error('valor') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('name')}}</strong>
                </p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>E-mail</label>
                <input
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        placeholder="Digite o Email do cliente"
                        value="{{ old('email') }}"
                >
                @error('email') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('email')}}</strong>
                </p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Senha</label>
                <input
                        type="password"
                        id="password"
                        class="form-control @error('cep') is-invalid @enderror"
                        name="password"
                        placeholder="Digite a Senha"
                        value="{{  old('password') }}"
                >
                @error('password') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('password')}}</strong></p> @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>


@endsection