function calculo() {
    var cep = $("#cep").val();
    $.post('calcula.php', { cep : cep }, function (data) {
        data = JSON.parse(data);
        let vFrete = data.preco;
        let pFrete = data.prazo;
        $('#retorno').html(`O Valor do <b>frete</b> é <b>R$${vFrete}</b> com prazo de <b>${pFrete} Dias</b>!`);
    });
}