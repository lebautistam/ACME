// utiliza el plugin de jquery-validate para validar los campos de los formularios
$(document).ready(function(){
    $("#formOwner").validate({
        rules:{
            cedula:{
                required: true,
                minlength: 7,
                maxlength: 11,
            },
            nombre1:{
                required: true,
            },
            apellido1:{
                required: true,
            },
            apellido2:{
                required: true,
            },
            direccion:{
                required: true,
                maxlength: 50
            },
            telefono:{
                required: true,
                minlength: 7,
                maxlength: 10
            },
            ciudad:{
                required: true,
            }
        },
        messages:{
            cedula:{
                required: "Campo obligatorio",
                minlength: "Debe ingresar minimo 7 numeros",
                maxlength: "Máximo 11 cifras",
            },
            nombre1:{
                required: "Campo obligatorio"
            },
            apellido1:{
                required: "Campo obligatorio"
            },
            apellido2:{
                required: "Campo obligatorio"
            },
            direccion:{
                required: "Campo obligatorio"
            },
            telefono:{
                required: "Campo obligatorio",
                minlength: "Debe ingresar minimo 7 cifras",
                maxlength: "Máximo 10 cifras"
            },
            ciudad:{
                required: "Campo obligatorio"
            }
        }
    });
});