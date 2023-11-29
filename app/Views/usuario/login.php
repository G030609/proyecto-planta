<style>
  #imagen {
    float: left;
    border-radius: 20px; 
    margin: 3px;
    padding: 15px;
    background: -webkit-radial-gradient(30px 50px, ellipse, green 50%,
        #666666 70%, #999999 90%);
  }
  #boton{
    border-radius: 10px; 
    background: -webkit-radial-gradient(30px 50px, ellipse, #E49E56 10%,
                            green 70%, #999999 90%);
                            
  }

</style>
<div class="container">
  <div class="row">
    <div class="col"></div>
    <div class="col">
      <form action="<?php base_url('usuario/login'); ?>" method="POST">
        <?= csrf_field() ?>
        <div class="mb-3">
          <div class="mb-3">
            <img src="https://verdecora.es/blog/wp-content/uploads/2018/08/plantas-vivaces-flor-tardia.jpg" alt="" id="imagen" width="320" height="200">
            <label for="nombre_usuario" class="form-label">Nombre Usuario</label>
            <input type="text" class="form-control" autocomplete="on" id="nombre_usuario"
            placeholder="Ingrese el nombre de usuario"required minlength="4" maxlength="50" name="nombre_usuario">
          </div>
          <label for="email" class="form-label">Correo Electronico</label>
          <input type="email" class="form-control" autocomplete="on" id="email"
          placeholder="Ingrese su correo electronico" required name="email">
        </div>
        <div class="mb-3">
          <label for="contrasena" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contrasena"
          placeholder="Ingrese su contraseña" autocomplete="on" minlength="4" maxlength="10" name="contrasena">
        </div>

        <button type="submit" class="btn btn-success" id="boton" >Enviar</button>
      </form>
    </div>
    <div class="col"></div>
  </div>
</div>