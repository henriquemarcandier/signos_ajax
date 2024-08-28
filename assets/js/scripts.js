$("#signo-form").submit(function(evt){
    evt.preventDefault();
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        enctype: 'multipart/form-data',
        processData: false,
        success: function (result) {
            var vet = result.split('|-|');
            if (vet[0] == 0) {
                alert(vet[1])
            }
            else if (vet[0] == 1) {
                $("#conteudo").html(vet[1]);
            }
        },
    });
    return false;
});