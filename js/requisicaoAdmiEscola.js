$(document).ready(function() {


    dados();
    //CADASTRAR E ALTERAR DISCIPLINAS
    //CADASTRAR DISCIPLINAS
    $("#btDisciplina").click(function(event) {
        event.preventDefault();
        var idEscola = $("#hidenIdEscola").val();
        //var idDisciplina = $("#idDisc").val();
        var btDisciplina = $(this).text();
        var inputDisciplina = $("#inputDisciplina").val();
        var inputCurso = $("#inputCurso").val();
        $.ajax({
            url: "ConexaoAdmiEscola.php",
            method: "post",
            dataType: "json",
            data: { idEscola: idEscola, btDisciplina: btDisciplina, inputCurso: inputCurso, inputDisciplina: inputDisciplina },
            success: function(dados) {
                $("#td1").html(dados.idEscola).text();
                $("#td2").html(dados.diciplinas).text();
                $("#td3").html(dados.cursos).text();
            }

        })


    })


    //CADASTRAR DISCIPLINAS
    $("#btDisciplinaAt").click(function(event) {
        event.preventDefault();
        var idEscola = $("#hidenIdEscola").val();
        var idDisciplina = $("#idDisc").val();
        var btDisciplinaAt = $(this).text();
        var inputDisciplina = $("#inputDisciplina").val();
        var inputCurso = $("#inputCurso").val();
        $.ajax({
            url: "ConexaoAdmiEscola.php",
            method: "post",
            dataType: "json",
            data: { idEscola: idEscola, idDisciplina: idDisciplina, btDisciplinaAt: btDisciplinaAt, inputCurso: inputCurso, inputDisciplina: inputDisciplina },
            success: function(dados) {
                $("#td1").html(dados.idEscola).text();
                $("#td2").html(dados.diciplinas).text();
                $("#td3").html(dados.cursos).text();
            }

        })


    })

    //ALTERAR DISCIPLINAS PEGAR O ID
    $(".pegar").click(function(event) {
        event.preventDefault();
        var btAltDisc = $(this).text();
        var idDisc = $(this).data('idpegar');
        var disc = $(this).data('pegardisciplina');
        var curso = $(this).data('pegarcurso');
        $("#inputDisciplina").val(disc);
        $("#inputCurso").val(curso);
        $("#idDisc").val(idDisc);


        /*
        $.ajax({
            url: "ConexaoAdmiEscola.php",
            method: "post",
            data: { idDisc: idDisc, btAltDisc: btAltDisc, disc: disc, curso: curso },
            success: function(dados) {
                $("#mostraDisc").html(dados).text();
            }
        })*/
    })

    //ILIMINAR
    $(".pegariliminar").click(function(event) {
        event.preventDefault();
        var btIlimDisc = $(this).text();
        var idDisc = $(this).data('idpegari');
        $.ajax({
            url: "ConexaoAdmiEscola.php",
            method: "post",
            dataType: "json",
            data: { idDisc: idDisc, btIlimtDisc: btIlimDisc },
            success: function(dados) {
                $("#td1").html(dados.idEscola).text();
                $("#td2").html(dados.diciplinas).text();
                $("#td3").html(dados.cursos).text();
            }

        })


    })

    function dados() {

        $.ajax({
            url: "Atualizacao.php",
            method: "post",
            // dataType: "json",
            success: function(dados) {
                // var di = $("#valorMo").html(dados.disciplinas).text();
                $("#td2").html(dados).text();
                // $("#td2").html(dados.diciplinas).text();
                //$("#td3").html(dados.cursos).text();
                //$("#mostraDisc").text(di);
            }
        })

    }



})