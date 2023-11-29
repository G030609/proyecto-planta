<div class="container">
    <div class="row">

        <div class="col-8">
            <h2>Editar Categoria</h2>
            <form action="<?= base_url('categoria/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idCategoria" value="<?= $categorias->idCategoria ?>">
                <div class="mb-3">
                    <label for="nombre_categoria" class="form-label">Nombre de la categoria</label>
                    <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria" value="<?= $categorias->nombre_categoria ?>" required minlength="4" maxlength="40" pattern="[A-Za/s][4-40]">
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