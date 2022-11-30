<?php echo $cabezera; ?>
<h1>Lista de Servicios</h1>

<table class="table">
    <thead>
        <th>Propetario</th>
        <th>Vacunas</th>
        <th>Peluquería</th>
        <th>Desparacitación</th>
        <th>Castración</th>
        <th>Operación</th>
        <th>Hospitalización</th>
        <th>Total</th>
    </thead>
    <tbody>
        <?php foreach ($servicios as $prov) { ?>
            <?php $total=$prov["VACUNAS"]+$prov["PELUQUERIA"]+$prov["DESPARACITACION"]+$prov["CASTRACION"]+$prov["OPERACION"];?>
            <tr>
                <td><?=$prov["PROPETARIO"]?></td>
                <td>$<?=$prov["VACUNAS"]?></td>
                <td>$<?=$prov["PELUQUERIA"]?></td>
                <td>$<?=$prov["DESPARACITACION"]?></td>
                <td>$<?=$prov["CASTRACION"]?></td>
                <td>$<?=$prov["OPERACION"]?></td>
                <td>$<?=$prov["HOSPITALIZACION"]?></td>
                <td>$<?php echo $total ?></td>
                <td>
                    <a href="<?=base_url("Servicios-edicion?ID={$prov['ID_SERVICIOS']}")?>" class="btn btn-success">Editar</a>
                    <a href="<?=base_url("Servicios-eliminar?ID={$prov['ID_SERVICIOS']}")?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<?php echo $footer; ?>