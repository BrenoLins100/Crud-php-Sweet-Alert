$(function() {
    $('#btn-enviar').click(function() {

        var nome = $("#nome").val();
        var email = $("#email").val();
        var tel = $("#tel").val();

        var envio = {
            "nome": nome,
            "email": email,
            "tel": tel
        }



        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'cadastrar.php',
            async: true,
            data: envio,
            success: function(data) {
                if (data.return == true) {
                    swal("Sucesso!", "Dados inserirdos com Êxito", "success");
                }
            }
        });
        $("#nome").val("");
        $("#email").val("");
        $("#tel").val("");

    });
});