<div class="container">
    <div class="row">

        <div class="col-8">
            <h2>Editar Planta</h2>
            <form action="<?= base_url('planta/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="id_planta" value="<?= $plantas->id_planta ?>">
                <div class="mb-3">
                    <label for="nombre_planta" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre_planta" id="nombre" value="<?= $plantas->nombre_planta ?>" required minlength="4" maxlength="40" pattern="[A-Za/s][4-40]">
                </div>

                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria </label>
                    <input type="text" class="form-control" name="categoria" id="categoria" value="<?= $plantas->categoria ?>" required>
                </div>
                <div class="mb-3">
                    <label for="lugarOrigen" class="form-label">Lugar</label>
                    <input type="text" class="form-control" name="lugarOrigen" id="lugarOrigen" value="<?= $plantas->lugarOrigen ?>" required>
                </div>

                <div class="mb-3">
                    <label for="usos" class="form-label">Usos</label>
                    <input type="text" class="form-control" name="usos" id="usos" value="<?= $plantas->usos ?>" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
                <div align="center">
          <input type="button" onclick="history.back()" name="Volver atrás" value="Volver atrás">
          </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>
</div>