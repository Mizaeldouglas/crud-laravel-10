@extends('index')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Atualizar Usuario</h1>
    </div>

    <form method="POST" action="{{route('atualizar.usuarios', $findUsuarios->id)}}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input
                        type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        name="name"
                        placeholder="Digite o Nome do Usuario"
                        value="{{ isset($findUsuarios->name) ? $findUsuarios->name : old('name') }}"
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
                        value="{{ isset($findUsuarios->email) ? $findUsuarios->email : old('email') }}"
                >
                @error('email') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('email')}}</strong></p> @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Senha</label>
                <input
                        type="password"
                        id="password"
                        class="form-control @error('cep') is-invalid @enderror"
                        name="password"
                        placeholder="Digite a Senha"
                        value="{{ isset($findUsuarios->password) ? $findUsuarios->password : old('password') }}"
                >
                @error('password') <p class="pl-1 invalid-feedback"><strong>{{$errors->first('password')}}</strong></p> @enderror
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