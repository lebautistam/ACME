<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Acme</title>
        <link rel="stylesheet" href="<?=base_url?>Assets/css/styles.css" />
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="../jquery/validateOwner.js"></script>
        <script type="text/javascript" src="../jquery/validateDriver.js"></script>
        <script type="text/javascript" src="../jquery/validateVehicle.js"></script>
        <script type="text/javascript" src="../jquery/funtions.js"></script>
        <div id="container">
            <!--CABECERA -->
            <header id="header">
                <div id="logo">
                    <a href="<?=base_url?>owner/index">
                        Acme
                    </a>
                </div>
            </header>
            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="<?=base_url?>owner/index">Formulario</a>
                    </li>
                    <li>
                        <a href="<?=base_url?>report/see">Informe</a>
                    </li>
                </ul>
            </nav>
            <div id="content">
            <!--CONTENIDO CENTRAL-->
                <div id="central">
                    