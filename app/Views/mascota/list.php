<?php echo $cabezera; ?>
<h1>Lista de Mascotas</h1>
<style>
    th{
        color: white;
    }
    td{
        color: white;
    }
</style>
<div class="imagenfondo">
    <table class="table">
        <thead>
            <th>Propetario</th>
            <th>Mascota</th>
            <th>Raza</th>
            <th>Carnet Vacuna</th>
        </thead>
        <tbody>
            <?php foreach ($mascota as $prov) { ?>
                <tr>
                    <td><?=$prov["PROPETARIO"]?></td>
                    <td><?=$prov["MASCOTA"]?></td>
                    <td><?=$prov["RAZA"]?></td>
                    <td><?=$prov["CARNET_VACUNA"]?></td>
                    <td>
                        <a href="<?=base_url("Mascota-edicion?ID={$prov['ID_MASCOTA']}")?>" class="btn btn-success">Editar</a>
                        <a href="<?=base_url("Mascota-eliminar?ID={$prov['ID_MASCOTA']}")?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<?php echo $footer; ?>