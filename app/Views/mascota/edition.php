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
<center><h1>Editar Provincia</h1></center>
<div class="FROM">
<form action="<?=base_url("/Mascota-guardar?ID={$mascota['ID_MASCOTA']}")?>" method="post" class="form">
    <div class="formContent">
        <div>
            <label for="Nombre">Propetario de la Mascota</label>
            <input type="text" name="PROPETARIO" id="PROPETARIO" class="form-control" value=<?=$mascota["PROPETARIO"]?>>
        </div>
        <div>
            <label for="Nombre">Mascota</label>
            <input type="text" name="MASCOTA" id="MASCOTA" class="form-control" value=<?=$mascota["MASCOTA"]?>>
        </div>
        <div>
            <label for="Nombre">Raza</label>
            <input type="text" name="RAZA" id="RAZA" class="form-control" value=<?=$mascota["RAZA"]?>>
        </div>
        <div>
            <label for="Nombre">tamaño & peso</label>
            <input type="text" name="CARNET_VACUNA" id="CARNET_VACUNA" class="form-control" value=<?=$mascota["CARNET_VACUNA"]?>>
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