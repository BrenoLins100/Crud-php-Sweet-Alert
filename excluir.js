$(document).on("click", "#btn2", function() {
    var id = $(this).val();
    console.log(id);
    var envio = {
        "id": id
    }

    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'excluirCliente.php',
        async: true,
        data: envio,
        success: function(data) {
            if (data.return == true) {
                swal("Sucesso!", "Excluido com sucesso", "success");
            } else {
                swal("Erro  :( ", "Erro ao excluir, tente novamente!", "error");
            }

            for (var i = 1250; i > 0; i--) {
                location.reload();
            }

        }
    });
});