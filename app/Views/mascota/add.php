<?php echo $cabezera; ?>

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
<h1>Registrar Mascota</h1>
<div class="FROM">
<form action="<?=base_url('/Mascota-guardar')?>" method="post" class="form" enctype='multipart/form-data'>
    <div class="formContent">
        <div>
            <label for="Nombre">Propetario</label>
            <input type="text" name="PROPETARIO" id="PROPETARIO" class="form-control">
        </div>
        <div>
            <label for="Nombre">Mascota</label>
            <input type="text" name="MASCOTA" id="MASCOTA" class="form-control">
        </div>
        <div>
            <label for="Nombre">Raza</label>
            <input type="text" name="RAZA" id="RAZA" class="form-control">
        </div>
        <div class="form-check">
            <label for="Nombre">Vacunas</label><br>
            <input type="radio" name="CARNET_VACUNA" id="CARNET_VACUNA" value="Si" checked/>Si
            <input type="radio" name="CARNET_VACUNA" id="CARNET_VACUNA" value="No" autocomplete="on" checked/>No
        </div>
    </div>
    <div class="btn-Container">
        <div>
            <input type="submit" value="Guardar" class="btn btn-primary">
        </div>
    </div>
</form>
</div>
<?php echo $footer; ?> 

