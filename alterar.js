$(document).on("click", "#alterar", function() {
    var id = $("#id").val();
    var nome = $("#nome").val();
    var email = $("#email").val();
    var tel = $("#tel").val();

    var envio = {
        "id": id,
        "nome": nome,
        "email": email,
        "tel": tel
    }



    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'alterar.php',
        async: true,
        data: envio,
        success: function(data) {
            if (data.return == true) {
                swal("Sucesso!", "Alterado com sucesso", "success");
            } else {
                swal("Erro  :( ", "Erro ao alterar, tente novamente!", "error");
            }

            for (var i = 1250; i > 0; i--) {
                location.reload();
            }
        }
    });
});

$(document).on("click", "#btn-limpar", function() {
    $("#nome").val("");
    $("#email").val("");
    $("#tel").val("");

});