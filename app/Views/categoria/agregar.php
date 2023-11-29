<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('index.php/categoria/insert'); ?> " method="POST">
                <?= csrf_field() ?>
                <h2>Agregar Categoria</h2>
                <div class="form">
                <div class="mb-3">
                    <label for="nombre_categoria" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria"  minlength="4" maxlength="40" pattern="[A-Za/s][4-40]">
                </div>

                    <div class="mb-3">
                        <input type="submit" class="btn btn-success">
                    </div>
                    <div align="center">
          <input type="button" onclick="history.back()" name="Volver atrás" value="Volver atrás">