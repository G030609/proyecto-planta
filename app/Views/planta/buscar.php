<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="<?= base_url('index.php/planta/buscar/'); ?>" method="GET">
                <label for="nombre_planta">Nombre</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre de la planta" name="nombre_planta" required>
                <label for="lugarOrigen">Lugar De Origen</label>
                <input type="text" class="form-control" placeholder="Ingrese el lugar de ubicacion de la planta" name="lugarOrigen" required>
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
                <div align="right">
                    <input type="button" onclick="history.back()" name="Volver atrás" value="Volver atrás">
                </div>
            </form>

        </div>
    </div>
    <?php
    if (isset($plan)) {
        //print_r($materias);
    }
    ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Abreviatura</th>
                </thead>
                <tbody>
                    <?php foreach ($plantas as $planta) : ?>
                        <tr>
                            <td><?= $planta->nombre_planta ?></td>
                            <td><?= $planta->lugarOrigen ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>