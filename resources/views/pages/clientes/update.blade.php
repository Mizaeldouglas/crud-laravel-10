@extends('index')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Atualizar cliente</h1>
    </div>

    <form method="POST" action="{{route('atualizar.clientes', $findClientes->id)}}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input
                        type="text"
                        class="form-control @error('nome') is-invalid @enderror"
                        name="nome"
                        placeholder="Digite o Nome do Cliente"
                        value="{{ isset($findClientes->nome) ? $findClientes->nome : old('nome') }}"
                >
                @error('valor') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('nome')}}</strong>
                </p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>E-mail</label>
                <input
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        placeholder="Digite o Email do cliente"
                        value="{{ isset($findClientes->email) ? $findClientes->email : old('email') }}"
                >
                @error('email') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('email')}}</strong></p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Cep</label>
                <input
                        id="cep"
                        class="form-control @error('cep') is-invalid @enderror"
                        name="cep"
                        placeholder="Digite o Cep do cliente"
                        value="{{ isset($findClientes->cep) ? $findClientes->cep : old('cep') }}"
                >
                @error('cep') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('cep')}}</strong></p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Endereço</label>
                <input
                        id="endereco"
                        class="form-control @error('endereco') is-invalid @enderror"
                        name="endereco"
                        placeholder="Digite o Endereço do cliente"
                        value="{{ isset($findClientes->endereco) ? $findClientes->endereco : old('endereco') }}"
                >
                @error('email') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('email')}}</strong></p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Logradouro</label>
                <input
                        id="logradouro"
                        class="form-control @error('logradouro') is-invalid @enderror"
                        name="logradouro"
                        placeholder="Digite o Logradouro do cliente"
                        value="{{ isset($findClientes->logradouro) ? $findClientes->logradouro : old('logradouro') }}"
                >
                @error('logradouro') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('logradouro')}}</strong></p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Bairro</label>
                <input
                        id="bairro"
                        class="form-control @error('bairro') is-invalid @enderror"
                        name="bairro"
                        placeholder="Digite o Bairro do cliente"
                        value="{{ isset($findClientes->bairro) ? $findClientes->bairro : old('bairro') }}"
                >
                @error('bairro') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('bairro')}}</strong></p> @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $("#cep").blur(function () {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep != "") {
                var validacep = /^[0-9]{8}$/;
                if (validacep.test(cep)) {
                    $("#logradouro").val("");
                    $("#bairro").val(" ");
                    $("#endereco").val(" ");
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                        if (!("erro" in dados)) {
                            $("#logradouro").val(dados.logradouro.toUpperCase());
                            $("#bairro").val(dados.bairro.toUpperCase());
                            $("#endereco").val(dados.localidade.toUpperCase());
                        }
                        else {
                            alert("CEP não encontrado de forma automatizado digite manualmente ou tente novamente.");
                        }
                    });
                }
            }
        });
    </script>
@endsection