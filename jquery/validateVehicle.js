// utiliza el plugin de jquery-validate para validar los campos de los formularios
$(document).ready(function(){
    $("#formVehicle").validate({
        rules:{
            propietario:{
                required: true,
            },
            conductor:{
                required: true,
            },
            placa:{
                required: true,
                minlength:4,
                maxlength:10
            },
            color:{
                required: true,
                minlength:4,
                maxlength:15
            },
            marca:{
                required: true,
                maxlength: 15
            },
            tipo:{
                required: false,
            },
        },
        messages:{
            propietario:{
                required: "Seleccione documento",
            },
            conductor:{
                required: "Seleccione documento",
            },
            placa:{
                required: "Campo obligatorio",
                minlength:"Placa no adecuada",
                maxlength: "Máximo de caracteres"
            },
            color:{
                required: "campo Obligatorio",
                minlength: "Color no adecuado",
            },
            marca:{
                required: "Campo Obligatorio",
            }
        }
    });
});