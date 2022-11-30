<style>
    .formContent {
        text-align: center;
    }

    .formContent div {
        position: relative;
        display: inline-block;
    }
    .btn-Container {
        text-align: center;        
    }

    .FROM div {
        padding: 10px;
    }
</style>
<?php echo $cabezera; ?>
<h1>Editar Provincia</h1>
<div class="FROM">
<form action="<?=base_url("/Servicios-guardar?ID={$mascota['ID_SERVICIOS']}")?>" method="post" class="form">
    <div class="formContent">
        <div>
            <label for="Nombre">Propetario</label>
            <input type="text" name="PROPETARIO" id="PROPETARIO" class="form-control" value=<?=$mascota["PROPETARIO"]?>>
        </div>
        <div>
            <label for="Nombre">Vacunas</label>
            <input type="text" name="VACUNAS" id="VACUNAS" class="form-control" value=<?=$mascota["VACUNAS"]?>>
        </div>
        <div>
            <label for="Nombre">Peluquería</label>
            <input type="text" name="PELUQUERIA" id="PELUQUERIA" class="form-control" value=<?=$mascota["PELUQUERIA"]?>>
        </div>
        <div>
            <label for="Nombre">Desparacitación</label>
            <input type="text" name="DESPARACITACION" id="DESPARACITACION" class="form-control" value=<?=$mascota["DESPARACITACION"]?>>
        </div>
        <div>
            <label for="Nombre">Castración</label>
            <input type="text" name="CASTRACION" id="CASTRACION" class="form-control" value=<?=$mascota["CASTRACION"]?>>
        </div>
        <div>
            <label for="Nombre">Operación</label>
            <input type="text" name="OPERACION" id="OPERACION" class="form-control" value=<?=$mascota["OPERACION"]?>>
        </div>
        <div>
            <label for="Nombre">Hospitalización</label>
            <input type="text" name="HOSPITALIZACION" id="HOSPITALIZACION" class="form-control" value=<?=$mascota["HOSPITALIZACION"]?>>
        </div>
    </div>
    <div class="btn-Container">
        <div>
            <input type="submit" name="upload" value="Guardar" class="btn btn-primary">
        </div>
    </div>
</form>
</div>

<div class="alert alert-warning" role="alert">
    ¡Debes llenar todos los campos!
</div>
<?php echo $footer; ?>