// utiliza el plugin de jquery-validate para validar los campos de los formularios
$(document).ready(function(){
    $("#formDriver").validate({
        rules:{
            propietario:{
                required: true,
            },
            cedula1:{
                required: true,
                minlength: 7,
                maxlength: 10
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
            propietario:{
                required: "Seleccion un documento",
            },
            cedula1:{
                required: "Campo obligatorio",
                minlength: "Debe ingresar minimo 7 numeros"
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
                minlength: "Debe ingresar minimo 7 numeros"
            },
            ciudad:{
                required: "Campo obligatorio"
            }
        }
    });
});