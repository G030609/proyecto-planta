<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="<?= base_url('index.php/categoria/buscar/'); ?>" method="GET">
                <label for="nombre_categoria">Nombre</label>
                <input type="text" class="form-control" name="nombre_categoria" required>

                <input type="submit" class="btn btn-success mt-4" value="Buscar">
                <div align="right">
                    <input type="button" onclick="history.back()" name="Volver atrás" value="Volver atrás">
                </div>
            </form>

        </div>
    </div>
    <?php
    if (isset($categoria)) {
        //print_r($materias);
    }
    ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>Nombre</th>
                  
                </thead>
                <tbody>
                    <?php foreach ($categorias as $categoria) : ?>
                        <tr>
                            <td><?= $categoria->nombre_categoria ?></td>
                         
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>