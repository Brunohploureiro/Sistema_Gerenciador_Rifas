$(document).ready(function() {

    $('.btn-save').click(function(e){
        e.preventDefault();

        let dados = $('#form-tipo').serialize()

        dados += '&operacao=${$('btn-save').attr(data-operacao)
    })
})