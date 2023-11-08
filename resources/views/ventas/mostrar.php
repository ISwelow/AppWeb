<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Ingresos</h2>

            <table class="table">
                <thead>
                    <th>Tipo Comprobante</th>
                    <th>Serie Comprobante</th>
                    <th>Número Comprobante</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach($ingresos as $ingreso): ?>
                        <tr>
                            <td><?= $ingreso->tipo_comprobante ?></td>
                            <td><?= $ingreso->serie_comprobante ?></td>
                            <td><?= $ingreso->num_comprobante ?></td>
                            <td><?= $ingreso->fecha ?></td>
                            <td><?= $ingreso->hora ?></td>
                            <td><?= $ingreso->estado ?></td>
                            <td>
                                <a href="<?= base_url('index.php/ingreso/eliminar/'.$ingreso->idIngreso); ?>">Eliminar</a>
                                <a href="<?= base_url('index.php/ingreso/editar/'.$ingreso->idIngreso); ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
