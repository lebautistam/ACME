Link del proyecto con hosting: http://acmeprueba.epizy.com/Acme

Plan de estudios semillero https://docs.google.com/spreadsheets/d/1G2KNQYuoMQkP6FOtlAs288Z_nr9WFv6-/edit#gid=1894197159

Este proyecto realiza el registro de propietarios, conductores y sus respectivos vehículos.

En la carpeta DataBase se encuentra el codigo para crear la base de datos en mysql(mariaDb).

En la carpeta config se encuentra el archivo de conexion hacia la base de datos, se cambian los parametros acorde a lo solicitado.

Este proyecto cuenta con validación de los formularios, campos obligatorios jquery-validate, verificación si existe C.C en la DB mediante jquery, si existe se desabiltan los demás campos del formulario y vicerverza si no existe gracias a ajax con su consulta asincrona, además de eso la validación por cuenta del lenguaje php para sanitizar los datos y asi enviar a la DB, sección donde se encuentra el informe con la información extraida de la DB mediante consulta multitabla.

