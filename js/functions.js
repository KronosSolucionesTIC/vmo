$(function() {
    $('#fkID_departamento').change(function(event) {
        /* Act on the event */
        limpiar_ciudad();
        limpiar_area();
        carga_ciudad($(this).val());
        aplica_funcion_ciudad();
    });

    function carga_ciudad(idDepartamento) {
        console.log(idDepartamento)
        var ruta = "../../controllers/ajaxusuario.php";
        $.ajax({
            url: ruta,
            type: 'POST',
            data: {
                tipo: "consultarciudad",
                idDepartamento: idDepartamento
            },
            success: function(data) {
                console.log(data)
                //convierte la cadena que se recibe json
                var tipos = JSON.parse(data);
                console.log(tipos)
                $('#fkID_ciudad').append('<option value="" selected="selected">Ciudad...</option>');
                for (x = 0; x < tipos.length; x++) {
                    $('#fkID_ciudad').append('<option value=' + tipos[x]["idCiudad"] + '>' + tipos[x]["nombreCiudad"] + '</option>');
                }
            }
        })
    }

    function aplica_funcion_ciudad() {
        $('#fkID_ciudad').change(function(event) {
            limpiar_area();
            carga_area($(this).val());
        });
    }

    function carga_area(idCiudad) {
        console.log(idCiudad)
        var ruta = "../../controllers/ajaxusuario.php";
        $.ajax({
            url: ruta,
            type: 'POST',
            data: {
                tipo: "consultararea",
                idCiudad: idCiudad
            },
            success: function(data) {
                console.log(data)
                //convierte la cadena que se recibe json
                var tipos = JSON.parse(data);
                console.log(tipos)
                $('#fkID_area').append('<option value="" selected="selected">Area...</option>');
                for (x = 0; x < tipos.length; x++) {
                    $('#fkID_area').append('<option value=' + tipos[x]["idArea"] + '>' + tipos[x]["nombreArea"] + '</option>');
                }
            }
        })
    }

    function limpiar_ciudad() {
        $('#fkID_ciudad').remove();
        $("#div_ciudad").append('<select class="fadeIn third" id="fkID_ciudad" name="fkID_ciudad">' + '</select>');
    }

    function limpiar_area() {
        $('#fkID_area').remove();
        $("#div_area").append('<select class="fadeIn third" id="fkID_area" name="fkID_area">' + '</select>');
    }
});