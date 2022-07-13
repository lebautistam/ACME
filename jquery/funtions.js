// Funcion para determinar si existe la cedula del propietario en la base de datos
$(document).ready(function(){
    $("#cedula").on("keyup",function(){
        var cedula=$("#cedula").val();//capturando el valor del input
        var lengthId=$("#cedula").val().length;//capturando la longitud de la cedula
        // console.log(lengthId);
        // validar la lonigtud que coincida con lo solicitado en el campo
        if(lengthId >=7){
            var info="cedula="+cedula;
            console.log(info);
            //utilizando ajax para la consulta asincrona
            var url;
            url=$.ajax({
                url:'..//models/checkId.php',
                type: "GET",
                data: info,
                dataType: 'JSON',
                success: function(data){
                    
                    if(data.success==0){
                        $("#respuesta").html(data.message);
                    }else{
                        $("#respuesta").html(data.message);
                    }
                }
            });
            // console.log(url);
        }
    });
// Funcion para determinar si existe la cedula del conductor en la base de datos
    $("#cedula1").on("keyup",function(){
        var cedula1=$("#cedula1").val();//capturando el valor del input
        var lengthId1=$("#cedula1").val().length;//capturando la longitud de la cedula
        // console.log(lengthId);
        // validar la lonigtud que coincida con lo solicitado en el campo
        if(lengthId1 >=7){
            var info1="cedula1="+cedula1;
            console.log(info1);
            //utilizando ajax para la consulta asincrona
            var url1;
            url1=$.ajax({
                url:'..//models/checkId.php',
                type: "GET",
                data: info1,
                dataType: 'JSON',
                success: function(data1){
                    
                    if(data1.success==0){
                        $("#request").html(data1.message);
                    }else{
                        $("#request").html(data1.message);
                    }
                }
            });
             console.log(url1);
        }
    });
});