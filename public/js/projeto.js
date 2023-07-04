function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
    if (confirm('Deseja confirmar a exclusão?')) {
        $.blockUI({
            message: "EXCLUINDO...",
            css: {
                border: 'none',
                padding: '15px',
                backgroundColor: 'red',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#fff'
            },
            timeout: 2000,
        });
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id: idDoRegistro,
            },
        }).done(function (data) {
            $.unblockUI();
            if (data.success == true) {
                window.location.reload();
            }else {
                alert("Não foi possivel exluir")
            }
        }).fail(function (data) {
            $.unblockUI();
            alert("Não foi possível buscar os dados");
        });
    }
}
$('#mascara_valor').mask('#.##0,00', {reverse: true});


