<h2>Ingrese los datos del conductor</h2>

<form action="<?=base_url?>driver/save" class="form_container" id="formDriver" method="POST">
    <div id="form">
        <?php if(isset($_SESSION['owner']) && $_SESSION['owner']=='completed'):?>
        <strong class="alert_green">Registro de propietario completo!</strong>
        <?php endif;?>
        <?php if(isset($_SESSION['driver']) && $_SESSION['driver']=='imcopleted'):?>
        <strong class="alert_red">Rellene todos los campos</strong>
        <?php endif;?>
        <label for="cedula1" class="form-label">Número de cedula del conductor <span>*</span></label>
        <input type="number" class="form-control" id="cedula1" name="cedula1" minlength="5" maxlength="30" pattern="[0-9]+">
        <div class="error" id="request"></div>
        <strong class="alert_red"><?= isset($_SESSION['driver'])? utils::mistakes($_SESSION['driver'],'cedula1'):''; ?></strong>
        <strong class="alert_red"><?= isset($_SESSION['driver'])? utils::mistakes($_SESSION['driver'],'cedulalen'):''; ?></strong>
        <label for="nombre1" class="form-label">Primer Nombre <span>*</span></label>
        <input type="text" class="form-control" name="nombre1" minlength="1" maxlength="30">
        <strong class="alert_red"><?= isset($_SESSION['driver'])? utils::mistakes($_SESSION['driver'],'nombre1'):''; ?></strong>
        <label for="nombre2" class="form-label">Segundo Nombre</label>
        <input type="text" class="form-control" name="nombre2" minlength="1" maxlength="30">
        <strong class="alert_red"><?= isset($_SESSION['driver'])? utils::mistakes($_SESSION['driver'],'nombre2'):''; ?></strong>
        <label for="apellido1" class="form-label">Primer apellido <span>*</span></label>
        <input type="text" class="form-control" name="apellido1" minlength="1" maxlength="30">
        <strong class="alert_red"><?= isset($_SESSION['driver'])? utils::mistakes($_SESSION['driver'],'apellido1'):''; ?></strong>
        <label for="apellido2" class="form-label">Segundo apellido <span>*</span></label>
        <input type="text" class="form-control" name="apellido2" minlength="1" maxlength="30">
        <strong class="alert_red"><?= isset($_SESSION['driver'])? utils::mistakes($_SESSION['driver'],'apellido2'):''; ?></strong>
        <label for="direccion" class="form-label">Dirección <span>*</span></label>
        <input type="address" class="form-control" name="direccion" maxlength="50">
        <strong class="alert_red"><?= isset($_SESSION['driver'])? utils::mistakes($_SESSION['driver'],'direccion'):''; ?></strong>
        <label for="telefono" class="form-label">Teléfono <span>*</span></label>
        <input type="number" class="form-control" name="telefono" minlength="5" maxlength="20" pattern="[0-9]+">
        <strong class="alert_red"><?= isset($_SESSION['driver'])? utils::mistakes($_SESSION['driver'],'telefono'):''; ?></strong>
        <strong class="alert_red"><?= isset($_SESSION['driver'])? utils::mistakes($_SESSION['driver'],'telen'):''; ?></strong>
        <label for="ciudad" class="form-label">Ciudad <span>*</span></label>
        <input type="text" class="form-control" name="ciudad" maxlength="30">
        <strong class="alert_red"><?= isset($_SESSION['driver'])? utils::mistakes($_SESSION['driver'],'ciudad'):''; ?></strong>
        <?php utils::deleteSession('owner'); ?>
        <?php utils::deleteSession('driver'); ?>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </div>
</form>