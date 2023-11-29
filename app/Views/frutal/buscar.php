<div class="container">
    <div class="row">
        <div class="col-12">
            <!-Se establece la ruta y el formulario de los datos a buscar->
            <form action="<?= base_url('index.php/frutal/buscar/'); ?>" method="GET">
                <label for="nombre_planta">Nombre</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre de la planta" name="nombre_planta" required>
                <label for="lugar_origen">Lugar De Origen</label>
                <input type="text" class="form-control" placeholder="Ingrese el lugar dee origen de la planta" name="lugar_origen">
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
                <div align="right">
                    <input type="button" onclick="history.back()" name="Volver atrás" value="Volver atrás">
                </div>
            </form>

        </div>
    </div>
    <?php
    if (isset($planta_frutales)) {
        //print_r($hierba);
    }
    ?>
    <!-Ciclo foreach para leer los datos a buscar->
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Lugar de origen</th>
                </thead>
                <tbody>
                    <?php foreach ($planta_frutales as $planta_frutal) : ?>
                        <tr>
                            <td><?= $planta_frutal->nombre_planta ?></td>
                            <td><?= $planta_frutal->lugar_origen ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>