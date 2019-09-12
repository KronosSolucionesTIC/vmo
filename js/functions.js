$(function() {
    $('#continuar').click(function(event) {
        /* Act on the event */
        console.log('Entro');
    });
    $(".respuestas").click(function() {
        //Toma el id 
        idCampo = this.id;
        //Toma el numero de pestaña
        pestana = idCampo.substring(5, 6);
        //Toma el numero de pregunta
        pregunta = idCampo.substring(6, 7);
        //Toma cantidad de respuestas
        cant_rptas = $('#cant_rpta_' + pestana + pregunta).val();
        //Limpia clase de las respuestas
        for (a = 1; a <= cant_rptas; a++) {
            $('#rpta_' + pestana + pregunta + a).removeClass("respuestas_sel");
            $('#rpta_' + pestana + pregunta + a).addClass("respuestas");
        }
        //Cambia la clase a la seleccionada
        $(this).toggleClass("respuestas respuestas_sel");
        //Toma el valor del campo
        valor = $(this).val();
        //Pone la respuesta en campo oculto
        $("#opcion_" + pestana + pregunta).val(valor);
    });
    $('#finalizar').click(function(event) {
        //Recorro pestañas
        for (a = 1; a <= 2; a++) {
            //Consulto preguntas por pestaña
            cant_prgtas = $('#cant_pgta_' + a).val();
            //Variable para validar si faltan
            faltan = 0;
            //Recorro las opciones
            for (b = 1; b <= cant_prgtas; b++) {
                if ($("#opcion_" + a + b).val() == '') {
                    faltan = 1;
                }
            }
        }
        if (faltan == 1) {
            alert('Por favor Responda todas las Preguntas para poder Continuar');
        } else {
            alert('Todas llenas');
        }
    });
    $("#next_encuesta").click(function() {
        desactivarTabs();
        $("#nav-company-tab").addClass("active");
    });
    $("#previous_company").click(function() {
        desactivarTabs();
        $("#nav-encuesta-tab").addClass("active");
    });
    $("#next_company").click(function() {
        desactivarTabs();
        $("#nav-cadena-tab").addClass("active");
    });
    $("#previous_cadena").click(function() {
        desactivarTabs();
        $("#nav-company-tab").addClass("active");
    });
    $("#next_cadena").click(function() {
        desactivarTabs();
        $("#nav-tipo-tab").addClass("active");
    });
    $("#previous_tipo").click(function() {
        desactivarTabs();
        $("#nav-cadena-tab").addClass("active");
    });
    $("#next_tipo").click(function() {
        desactivarTabs();
        $("#nav-kpi-tab").addClass("active");
    });
    $("#previous_kpi").click(function() {
        desactivarTabs();
        $("#nav-tipo-tab").addClass("active");
    });
    $("#next_kpi").click(function() {
        desactivarTabs();
        $("#nav-kri-tab").addClass("active");
    });
    $("#previous_kri").click(function() {
        desactivarTabs();
        $("#nav-kpi-tab").addClass("active");
    });
    $("#next_kri").click(function() {
        desactivarTabs();
        $("#nav-aguasArriba-tab").addClass("active");
    });
    $("#previous_aguasArriba").click(function() {
        desactivarTabs();
        $("#nav-kri-tab").addClass("active");
    });
    $("#next_aguasArriba").click(function() {
        desactivarTabs();
        $("#nav-proceso-tab").addClass("active");
    });
    $("#previous_proceso").click(function() {
        desactivarTabs();
        $("#nav-aguasArriba-tab").addClass("active");
    });
    $("#next_proceso").click(function() {
        desactivarTabs();
        $("#nav-aguasAbajo-tab").addClass("active");
    });
    $("#previous_aguasAbajo").click(function() {
        desactivarTabs();
        $("#nav-proceso-tab").addClass("active");
    });

    function desactivarTabs() {
        $(".nav-item.nav-link").removeClass("active");
    }
});