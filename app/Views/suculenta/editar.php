<div class="container">
    <div class="row">

        <div class="col-8">
            <h2>Editar Planta</h2>
            <form action="<?= base_url('suculenta/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="id_suculenta" value="<?= $planta_suculentas->id_suculenta ?>">
                <div class="mb-3">
                    <label for="nombre_planta" class="form-label">Nombre de la planta</label>
                    <input type="text" class="form-control" name="nombre_planta" id="nombre_planta" value="<?= $planta_suculentas->nombre_planta ?>" required minlength="4" maxlength="100" pattern="[A-Za/s][4-40]">
                </div>
                <div class="mb-3">
                    <label for="lugar_origen" class="form-label">Lugar de origen</label>
                    <input type="text" class="form-control" name="lugar_origen" id="lugar_origen" value="<?= $planta_suculentas->lugar_origen ?>" required minlength="4" maxlength="100" pattern="[A-Za/s][4-40]">
                </div>
                <div class="mb-3">
                    <label for="caracteristicas" class="form-label">Caracteristicas</label>
                    <input type="text" class="form-control" name="caracteristicas" id="caracteristicas" value="<?= $planta_suculentas->caracteristicas ?>" required minlength="4" pattern="[A-Za/s][4-40]">
                </div>
                <div class="mb-3">
                    <label for="usos" class="form-label">Usos</label>
                    <input type="text" class="form-control" name="usos" id="usos" value="<?= $planta_suculentas->usos ?>" required minlength="4" pattern="[A-Za/s][4-40]">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" name="Actualizar">
                </div>
                <div align="center">
          <input type="button" onclick="history.back()"  class="btn btn-success" name="Volver atrás" value="Volver atrás">
          </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>
</div>