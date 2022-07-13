<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Acme</title>
        <link rel="stylesheet" href="Assets/css/styles.css" />
    </head>
    <body>
        <div id="container">
            <!--CABECERA -->
            <header id="header">
                <div id="logo">
                    <a href="index.php">
                        Acme
                    </a>
                </div>
            </header>
            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Formulario</a>
                    </li>
                    <li>
                        <a href="#">Informe</a>
                    </li>
                </ul>
            </nav>
            <div id="content">
            <!--CONTENIDO CENTRAL-->
                <div id="central">
                    <h2>Ingrese los datos del propietario</h2>

                    <form action="registration.php" class="form_container" method="POST"> 
                        <div id="form">
                            <label for="cedula" class="form-label">Número de cedula</label>
                            <input type="number" class="form-control" name="cedula"  minlength="5" maxlength="30" pattern="[0-9]+">
                            <label for="1nombre" class="form-label">Primer Nombre</label>
                            <input type="text" class="form-control" name="1nombre" minlength="1" maxlength="30">
                            <label for="2nombre" class="form-label">Segundo Nombre</label>
                            <input type="text" class="form-control" name="2nombre"  minlength="1" maxlength="30">
                            <label for="1apellido" class="form-label">Primer apellido</label>
                            <input type="text" class="form-control" name="1apellido" minlength="1" maxlength="30">
                            <label for="2apellido" class="form-label">Segundo apellido</label>
                            <input type="text" class="form-control" name="2apellido" minlength="1" maxlength="30">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="address" class="form-control" name="direccion" maxlength="50">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="number" class="form-control" name="telefono" minlength="5" maxlength="20" pattern="[0-9]+">
                            <label for="ciudad" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" maxlength="30">

                            <input type="submit" class="btn btn-primary" value="Enviar">
                        </div>
                    </form>

                </div>
            </div>
                <!--PIE DE PAGINA-->
            <footer id="footer">
                <p>Desarollado por Leider Bautista &copy; <?= date('Y') ?></p>
            </footer>
        </div>
    </body>

</html>