                <h2>Ingrese los datos del propietario</h2>

                    <form action="<?=base_url?>owner/save" class="form_container" id="formOwner" method="POST">
                        <div id="form">
                            <?php if(isset($_SESSION['owner']) && $_SESSION['owner']=='imcopleted'):?>
                            <strong class="alert_red">Rellene todos los campos</strong>
                            <?php endif;?>
                            <?php if(isset($_SESSION['vehicle']) && $_SESSION['vehicle']=='completed'):?>
                            <strong class="alert_green">Registro Completo</strong>
                            <?php endif;?>
                            <label for="cedula" class="form-label">Número de cedula <span>*</span></label>
                            <input type="number" class="form-control" id="cedula" name="cedula"  pattern="[0-9]+">
                            <div id="respuesta" class="error" for="cedula"></div>
                            <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'cedula1'):''; ?></strong>
                            <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'cedulalen'):''; ?></strong>
                            <label for="nombre1" class="form-label">Primer Nombre <span>*</span></label>
                            <input type="text" class="form-control" id="nombre1" name="nombre1" >
                            <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'nombre1'):''; ?></strong>
                            <label for="nombre2" class="form-label">Segundo Nombre</label>
                            <input type="text" class="form-control" id="nombre2" name="nombre2">
                            <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'nombre2'):''; ?></strong>
                            <label for="apellido1" class="form-label">Primer apellido <span>*</span></label>
                            <input type="text" class="form-control" id="apellido1" name="apellido1">
                            <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'apellido1'):''; ?></strong>
                            <label for="apellido2" class="form-label">Segundo apellido <span>*</span></label>
                            <input type="text" class="form-control" id="apellido2" name="apellido2">
                            <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'apellido2'):''; ?></strong>
                            <label for="direccion" class="form-label">Dirección <span>* </span></label>
                            <input type="address" class="form-control" id="direccion" name="direccion" maxlength="50">
                            <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'direccion'):''; ?></strong>
                            <label for="telefono" class="form-label">Teléfono <span>* </span></label>
                            <input type="number" class="form-control" id="telefono" name="telefono" pattern="[0-9]+">
                            <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'telefono'):''; ?></strong>
                            <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'telen'):''; ?></strong>
                            <label for="ciudad" class="form-label">Ciudad <span>*</span></label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad" >
                            <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'ciudad'):''; ?></strong>
                            <?php utils::deleteSession('owner'); ?>
                            <?php utils::deleteSession('errores'); ?>
                            <?php utils::deleteSession('vehicle'); ?>
                            <input type="submit" class="btn btn-primary" value="Enviar">
                        </div>
                    </form>
