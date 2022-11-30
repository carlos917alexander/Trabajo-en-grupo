<?php echo $cabezera; ?>

<h1>Registrar Sercicios</h1>


<div class="FROM">
<form action="<?=base_url('/Servicios-guardar')?>" method="post" class="form" enctype='multipart/form-data'>
    <div class="formContent">
        <div>
            <label for="Nombre">Propetario</label>
            <input type="text" name="PROPETARIO" id="PROPETARIO" class="form-control">
        </div>
        <div>
            <label for="Nombre">Vacunas</label>
            <input type="text" name="VACUNAS" id="VACUNAS" class="form-control">
        </div>
        <div>
            <label for="Nombre">Peluquería</label>
            <input type="text" name="PELUQUERIA" id="PELUQUERIA" class="form-control">
        </div>
        <div>
            <label for="Nombre">Desparacitación</label>
            <input type="text" name="DESPARACITACION" id="DESPARACITACION" class="form-control">
        </div>
        <div>
            <label for="Nombre">Operación</label>
            <input type="text" name="OPERACION" id="OPERACION" class="form-control">
        </div>
        <div>
            <label for="Nombre">Hospitalización</label>
            <input type="text" name="HOSPITALIZACION" id="HOSPITALIZACION" class="form-control">
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