<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Juegos</h2>

            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach($juegos as $juego): ?>
                        <tr>
                            <td><?= $juego->nombre ?></td>
                            <td><?= $juego->stock ?></td>
                            <td><?= $juego->descripcion ?></td>
                            <td><?= $juego->estado ?></td>
                            <td>
                                <a href="<?= base_url('index.php/juego/eliminar/'.$juego->idJuego); ?>">Eliminar</a>
                                <a href="<?= base_url('index.php/juego/editar/'.$juego->idJuego); ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
