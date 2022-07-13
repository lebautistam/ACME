<h2>Ingrese los datos del vehículo</h2>
<form action="<?=base_url?>vehicle/save" class="form_container" id="formVehicle" method="POST">
    <div id="form">
        <?php if(isset($_SESSION['driver']) && $_SESSION['driver']=='completed'):?>
        <strong class="alert_green">Registro del conductor completo!</strong>
        <?php endif;?>
        <?php if(isset($_SESSION['vehicle']) && $_SESSION['vehicle']=='imcopleted'):?>
        <strong class="alert_red">Rellene todos los campos</strong>
        <?php endif;?>
        <label for="propietario" class="form-label">Seleccione el propietario por su identificacíon <span>*</span></label>
        <select name="propietario" id="propietario" class="form-select">
            <option value="" placeholder>...</option>
        <?php 
        while($indetification=$owner_ide->fetch_object()):?>
            <option value="<?= $indetification->Id;?>" ><?=$indetification->Numero_cedula; ?></option>
        <?php endwhile; ?>
        </select>
        <label for="conductor" class="form-label">Seleccione el conductor por su identificacíon <span>*</span></label>
        <select name="conductor" id="conductor" class="form-select">
            <option value="" placeholder>...</option>
        <?php 
        while($indetification1=$driver_ide->fetch_object()):?>
            <option value="<?= $indetification1->Id;?>" ><?=$indetification1->Numero_cedula; ?></option>
        <?php endwhile; ?>
        </select>
        <label for="placa" class="form-label">Placa <span>*</span></label>
        <input type="text" class="form-control" name="placa" minlength="2" maxlength="8">
        <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'placa'):''; ?></strong>
        <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'placalen'):''; ?></strong>
        <label for="color" class="form-label">Color del vehículo <span>*</span></label>
        <input type="text" class="form-control" name="color">
        <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'color'):''; ?></strong>
        <label for="marca" class="form-label">Marca <span>*</span></label>
        <input type="text" class="form-control" name="marca">
        <strong class="alert_red"><?= isset($_SESSION['errores'])? utils::mistakes($_SESSION['errores'],'marca'):''; ?></strong>
        <label for="tipo" class="form-label">Tipo <span>*</span></label>
        <select name="tipo" id="" class="form-select">
            <option value="privado">Privado</option>
            <option value="público" selected>Público</option>
        </select>

        <?php utils::deleteSession('driver'); ?>
        <?php utils::deleteSession('vehicle'); ?>
        <?php utils::deleteSession('errores'); ?>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </div>
</form>