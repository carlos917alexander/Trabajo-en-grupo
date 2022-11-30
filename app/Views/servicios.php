<?php echo $cabezera; ?>
<header id="head">
    <div class="inner">
        <div id="nomobile" class="container-fluid">
        <br><br><br>
        <a href="<?php echo base_url();?>/Mascota-agregar" class="btn2">Registrar Mascota</a>
            <div class="leyenda-header hidden-xs clearfix"><div class="text-right">La Empresa Clínica Veterinaria S.A.</div></div>
        <br><br><br>
    </div>
</header>

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
<link rel="stylesheet" href="<?php echo base_url();?>/css/ms.css">

<br><br>
    <h1>Registrar Servicios</h1>
    <p>(Registre los precios de los servicios)</p>
</div>
<form action="<?=base_url('/Servicios-guardar')?>" method="post" class="form" enctype='multipart/form-data'>
    <div class="formContent">
        <div>
            <label for="Nombre">Propetario</label>
            <input type="text" name="PROPETARIO" id="PROPETARIO" class="form-control">
        </div>
        <div>
            <label for="Nombre">Vacuna</label>
            <input type="number" name="VACUNA" id="VACUNA" class="form-control">
        </div>
        <div>
            <label for="Nombre">Peluquería</label>
            <input type="number" name="PELUQUERIA" id="PELUQUERIA" class="form-control">
        </div>
        <div>
            <label for="Nombre">Desparacitación</label>
            <input type="number" name="DESPARACITACION" id="DESPARACITACION" class="form-control">
        </div>
        <div>
            <label for="Nombre">Castración</label>
            <input type="number" name="CASTRACION" id="CASTRACION" class="form-control">
        </div>
        <div>
            <label for="Nombre">Operación</label>
            <input type="number" name="OPERACION" id="OPERACION" class="form-control">
        </div>
        <div>
            <label for="Nombre">Hospitalización</label>
            <input type="number" name="HOSPITALIZACION" id="HOSPITALIZACION" class="form-control">
        </div>
    </div>
    <br>
    <div class="btn-Container">
        <div>
            <input type="submit" value="Guardar" class="btn btn-primary">
        </div>
    </div>
</form>
<br><br>
<?php echo $footer; ?> 

        