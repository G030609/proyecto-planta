<div class="container">
    <div class="row">
        <div class="col-12">
<!-Campos que se establecen para realizar la busqueda->
            <form action="<?= base_url('index.php/medicibal/buscar/'); ?>" method="GET">
                <label for="nombre_planta">Nombre</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre de la planta" name="nombre_planta" required>
                <label for="lugar_origen">Lugar De Origen</label>
                <input type="text" class="form-control" placeholder="Ingrese el lugar de origen de la planta" name="lugar_origen">
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
                <div align="right">
                    <input type="button" onclick="history.back()" name="Volver atrás" value="Volver atrás">
                </div>
            </form>

        </div>
    </div>
    <?php
    if (isset($planta_medicibales)) {
        //print_r($hierba);
    }
    ?>
   <!-Variables que se leeran en el siguiente ciclo-> 
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Lugar de origen</th>
                </thead>
                <tbody>
                    <?php foreach ($planta_medicinales as $planta_medicinal) : ?>
                        <tr>
                            <td><?= $planta_medicinal->nombre_planta ?></td>
                            <td><?= $planta_medicinal->lugar_origen ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>