<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('index.php/planta/insert'); ?> " method="POST">
                <?= csrf_field() ?>
                <h2>Agregar Planta</h2>
                <div class="form">
                    <div class="mb-3">
                        <label for="nombre_planta" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre_planta" id="nombre_planta" minlength="4" maxlength="40" pattern="[A-Za/s][4-40]">
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria </label>
                        <input type="text" class="form-control" name="categoria" id="categoria" required>
                    </div>
                    <div class="mb-3">
                        <label for="lugarOrigen" class="form-label">Lugar</label>
                        <input type="text" class="form-control" name="lugarOrigen" id="lugarOrigen" required>
                    </div>

                    <div class="mb-3">
                        <label for="usos" class="form-label">Usos</label>
                        <input type="text" class="form-control" name="usos" id="usos" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success">
                    </div>
                    <div align="center">
                        <input type="button" onclick="history.back()" name="Volver atrás" value="Volver atrás">
                    </div>
                </div>
            </form>