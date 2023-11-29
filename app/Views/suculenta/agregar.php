<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('index.php/suculenta/insert'); ?> " method="POST">
                <?= csrf_field() ?>
                <h2>Agregar Planta</h2>
                <div class="form">

               
                    <div class="mb-3">
                        <label for="nombre_planta" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre_planta"
                        placeholder="Ingrese el nombre de la planta" id="nombre_planta" minlength="4" maxlength="40" pattern="[A-Za/s][4-40]">
                    </div>

                    <div class="mb-3">
                        <label for="lugar_origen" class="form-label">Lugar de origen</label>
                        <input type="text" class="form-control" name="lugar_origen"
                        placeholder="Ingrese el lugar de origen de la planta" id="lugar_origen" required>
                    </div>
                    <div class="mb-3">
                        <label for="caracteristicas" class="form-label">Caracteristicas</label>
                        <input type="text" class="form-control" name="caracteristicas"
                        placeholder="Ingrese las caracteristicas de la planta" id="caracteristicas" required>
                    </div>

                    <div class="mb-3">
                        <label for="usos" class="form-label">Usos</label>
                        <input type="text" class="form-control" name="usos"
                        placeholder="Ingrese los usos de la planta" id="usos" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success">
                    </div>
                    <div align="center">
                        <input type="button" onclick="history.back()" class="btn btn-success" name="Volver atrás" value="Volver atrás">
                    </div>
                </div>
            </form>