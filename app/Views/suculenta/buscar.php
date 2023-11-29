<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="<?= base_url('index.php/suculenta/buscar/'); ?>" method="GET">
                <label for="nombre_planta">Nombre</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre de la planta" name="nombre_planta" required>
                <label for="lugar_origen">Lugar De Origen</label>
                <input type="text" class="form-control" placeholder="Ingrese lugar de ubicacion de la planta" name="lugar_origen">
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
                <div align="right">
                    <input type="button" onclick="history.back()" class="btn btn-success" name="Volver atrás" value="Volver atrás">
                </div>
            </form>

        </div>
    </div>
    <?php
    if (isset($planta_suculentas)) {
        //print_r($hierba);
    }
    ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Lugar de origen</th>
                </thead>
                <tbody>
                    <?php foreach ($planta_suculentas as $planta_suculenta) : ?>
                        <tr>
                            <td><?= $planta_suculenta->nombre_planta ?></td>
                            <td><?= $planta_suculenta->lugar_origen ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
