<style>
  #b:hover ul {
    font-weight: bold;
    color: whlte;
    border: 2px solid RoyalBlue;
    text-align: center;
    width: 10em;
  }

  #imagen1 {
    width: 5;
    height: 5;
  }

  #medicina {
    border-radius: 20px;
    background: -webkit-radial-gradient(30px 50px, ellipse, #DAF7A6 10%,
        #DAF7A6 40%, #999999 90%);
    padding: auto;
  }

  #arbusto {
    border-radius: 20px;
    background: -webkit-radial-gradient(30px 50px, ellipse, greenyellow 10%,
        #E9967A 40%, #999999 90%);
    padding: 15px;
  }

  #hierba {
    border-radius: 20px;
    background: -webkit-radial-gradient(30px 50px, ellipse, green 10%,
        greenyellow 70%, #999999 90%);
  }

  #suculenta {
    border-radius: 20px;
    background: -webkit-radial-gradient(30px 50px, ellipse, yellow 10%,
        #666666 70%, #999999 90%);
  }

  #carnivora {
    border-radius: 20px;
    background: -webkit-radial-gradient(30px 50px, ellipse, #FF5733 10%,
        #E9967A 40%, #999999 90%);
  }

  #fruta {
    border-radius: 20px;
    background: -webkit-radial-gradient(30px 50px, ellipse, green 10%,
        #E9967A 40%, #999999 90%);
  }

  #rojo {
    border-radius: 20px;
    background: -webkit-radial-gradient(30px 50px, ellipse, red 10%,
        #FF0000 40%, #999999 90%);
  }

  #verde {
    border-radius: 15px;
    background: -webkit-radial-gradient(30px 50px, ellipse, #00FF00 10%,
        #7CFC00 40%, #7FFF00 90%);
  }

  #menudo {
    align-items: center;
  }

  #separa {
    display: flex;
    justify-content: space-between  space-around;
  }
</style>


<nav id="separa" class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div  class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul id="menudo" class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" id="verde" aria-current="page" href="/menus/menudo">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a id="hierba" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hierbas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/hierba/mostrar">Mostrar</a></li>
            <li><a class="dropdown-item" href="/hierba/agregar">Agregar</a></li>
            <li><a class="dropdown-item" href="/hierba/buscar">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a id="arbusto" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Arbustos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/arbusto/mostrar">Mostrar</a></li>
            <li><a class="dropdown-item" href="/arbusto/agregar">Agregar</a></li>
            <li><a class="dropdown-item" href="/arbusto/buscar">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a id="suculenta" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Suculentas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/suculenta/mostrar">Mostrar</a></li>
            <li><a class="dropdown-item" href="/suculenta/agregar">Agregar</a></li>
            <li><a class="dropdown-item" href="/suculenta/buscar">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a id="carnivora" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Carnivoras
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/carnivora/mostrar">Mostrar</a></li>
            <li><a class="dropdown-item" href="/carnivora/agregar">Agregar</a></li>
            <li><a class="dropdown-item" href="/carnivora/buscar">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a id="medicina" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Medicinales
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/medicinal/mostrar">Mostrar</a></li>
            <li><a class="dropdown-item" href="/medicinal/agregar">Agregar</a></li>
            <li><a class="dropdown-item" href="/medicinal/buscar">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a id="fruta" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Frutales
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/frutal/mostrar">Mostrar</a></li>
            <li><a class="dropdown-item" href="/frutal/agregar">Agregar</a></li>
            <li><a class="dropdown-item" href="/frutal/buscar">Buscar</a></li>
          </ul>
        </li>
        <center>
          <li class="nav-item">
            <a class="nav-link active" id="rojo" aria-current="page" href="/usuario/login">Cerrar sesión</a>
          </li>
        </center>
      </ul>

      </ul>

      <form class="d-flex" role="search">

      </form>
    </div>

  </div>
</nav>