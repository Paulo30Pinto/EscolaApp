$(document).ready(function() {
    $("#botao").click(function(event) {
        event.preventDefault();
        var botao = $(this).text();
        var idEscola = $("#idEscola").val();
        var nomeDirector = $("#nomeDirector").val();
        var nomeSubDirector = $("#nomeSubDirector").val();
        var nomeSecretaria = $("#nomeSecretaria").val();
        var nomeEscola = $("#nomeEscola").val();
        var numeroEscola = $("#numeroEscola").val();
        var senhaEscola = $("#senhaEscola").val();
        var emailEscola = $("#emailEscola").val();
        var contactosEscola = $("#contactosEscola").val();
        var dataEscola = $("#dataEscola").val();
        var tipoEnsino = $("#tipoEnsino").val();
        var municipioEscola = $("#municipioEscola").val();
        var provinciaEscola = $("#provinciaEscola").val();
        var curso1 = $("#curso1").val();
        var curso2 = $("#curso2").val();
        var curso3 = $("#curso3").val();
        var curso4 = $("#curso4").val();
        var curso5 = $("#curso5").val();
        var curso6 = $("#curso6").val();
        var curso7 = $("#curso7").val();
        var curso8 = $("#curso8").val();
        var curso9 = $("#curso9").val();
        var curso10 = $("#curso10").val();
        var curso11 = $("#curso11").val();
        var curso12 = $("#curso12").val();
        var curso13 = $("#curso13").val();
        var curso14 = $("#curso14").val();
        var curso15 = $("#curso15").val();
        var check1 = $("#primario").is(':checked');
        var check2 = $("#secundario").is(':checked');
        var check3 = $("#medio").is(':checked');
        var check4 = $("#todoCiclo").is(':checked');
        if (check1) {
            var primario = "Primário";
        }
        if (check2) {
            var secundario = "Iº Ciclo Secundário";
        }
        if (check3) {
            var medio = "IIº Ciclo Secundário";
        }
        if (check4) {
            var todoCiclo = "Primário , Iº e IIº Ciclo";
        }



        $.ajax({
            url: "ConexaoCadastroEscolas.php",
            method: "post",
            data: {
                botao: botao,
                nomeDirector: nomeDirector,
                nomeSubDirector: nomeSubDirector,
                nomeSecretaria: nomeSecretaria,
                idEscola: idEscola,
                nomeEscola: nomeEscola,
                numeroEscola: numeroEscola,
                senhaEscola: senhaEscola,
                emailEscola: emailEscola,
                contactosEscola: contactosEscola,
                dataEscola: dataEscola,
                tipoEnsino: tipoEnsino,
                municipioEscola: municipioEscola,
                provinciaEscola: provinciaEscola,
                primario: primario,
                secundario: secundario,
                medio: medio,
                todoCiclo: todoCiclo,
                curso1: curso1,
                curso2: curso2,
                curso3: curso3,
                curso4: curso4,
                curso5: curso5,
                curso6: curso6,
                curso7: curso7,
                curso8: curso8,
                curso9: curso9,
                curso10: curso10,
                curso11: curso11,
                curso12: curso12,
                curso13: curso13,
                curso14: curso14,
                curso15: curso15

            },


        })
        alert("Cadastrado com sucesso...");
        $("#idEscola").val('');
        $("#nomeDirector").val('');
        $("#nomeSubDirector").val('');
        $("#nomeSecretaria").val('');
        $("#nomeEscola").val('');
        $("#numeroEscola").val('');
        $("#senhaEscola").val('');
        $("#emailEscola").val('');
        $("#contactosEscola").val('');
        $("#dataEscola").val('');
        $("#tipoEnsino").val('');
        $("#municipioEscola").val('');
        $("#provinciaEscola").val('');
        $("#primario").val('');
        $("#secundario").val('');
        $("#medio").val('');
        $("#todoCiclo").val('');
        $("#curso1").val('');
        $("#curso2").val('');
        $("#curso3").val('');
        $("#curso4").val('');
        $("#curso5").val('');
        $("#curso6").val('');
        $("#curso7").val('');
        $("#curso8").val('');
        $("#curso9").val('');
        $("#curso10").val('');
        $("#curso11").val('');
        $("#curso12").val('');
        $("#curso13").val('');
        $("#curso14").val('');
        $("#curso15").val('');



    })

})