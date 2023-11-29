<style>
#h{
    font: 2em solid black;
    text-align: center;
    
}
nav{
 width:100%;display:flex;display:-webkit-flex;
 justify-content:center;-webkit-justify-content:center;
 max-width:820px;
}
#dos{
  width:100%;display:flex;display:-webkit-flex;
 justify-content:center;-webkit-justify-content:center;
 max-width:820px;
 align-items: center;
 padding: 15px;
}

#hierba{
  padding: 15px;
}
#arbusto{
  padding: 15px;
}
#suculenta{
  padding: 15px;
}
#carnivora{
  padding: 15px;
}
#medicina{
  padding: 15px;
}
#fruta{
  padding: 15px;
}
</style>
<div>
    <head>
        <h1 id="h">Vivir es increible</h1>
    </head>
   <center><nav  >
    <div id="hierba" class="card" style="width: 18rem;">
  <a href="<?=base_url('hierba/mostrar')?>"><img class="card-img-top" src="https://trucosdejardineria.com/wp-content/uploads/2019/03/hierbas-en-macetas.png"
   alt="Hierba"></a>
  <div class="card-body">
    <p class="card-text">Hierbas</p>
  </div>
</div>
<div id="arbusto"  class="card" style="width: 18rem;">
  <a href="<?=base_url('arbusto/mostrar')?>"><img class="card-img-top" src="https://th.bing.com/th/id/R.1e311054e21c216794efbde818a1584f?rik=prZ6%2bdus61x98w&pid=ImgRaw&r=0"
   alt="Plantas Arbustos"></a>
  <div class="card-body">
    <p class="card-text">Arbustos</p>
  </div>
</div>
<div id="suculenta"  class="card" style="width: 18rem;">
  <a href="<?=base_url('suculenta/mostrar')?>"><img class="card-img-top" src="https://th.bing.com/th/id/R.cb98bb8756c22a60edac30c28a21341d?rik=M%2buUQJ%2bGi4KooQ&pid=ImgRaw&r=0"
   alt="Plantas Suculentas"></a>
  <div class="card-body">
    <p class="card-text">Suculentas</p>
  </div>
</div>
</nav>

<nav id="dos">
<div id="carnivora"  class="card" style="width: 18rem;">
  <a href="<?=base_url('carnivora/mostrar')?>"><img class="card-img-top" src="https://th.bing.com/th/id/OIP.tLjCqhA7SztALmbFLX3zjAHaEK?rs=1&pid=ImgDetMain"
   alt="Plantas Carnivoras"></a>
  <div class="card-body">
    <p class="card-text">Plantas Carnivoras</p>
  </div>
</div>
<div id="medicina"  class="card" style="width: 18rem;">
  <a href="<?=base_url('medicinal/mostrar')?>"><img class="card-img-top" src="https://th.bing.com/th/id/R.33e63e8745283bd2ae4da2c2a9867fe1?rik=EmipCwv%2bx5i6xg&pid=ImgRaw&r=0"
   alt="Plantas Medicinales"></a>
  <div class="card-body">
    <p class="card-text">Plantas Medicinales</p>
  </div>
</div>
<div id="fruta"  class="card" style="width: 18rem;">
  <a href="<?=base_url('frutal/mostrar')?>"><img class="card-img-top" src="https://th.bing.com/th/id/OIP.0-fyDctcsYA8WYOHwbTF9gHaE6?rs=1&pid=ImgDetMain"
   alt="Plantas Frutales"></a>
  <div class="card-body">
    <p class="card-text">Plantas Frutales</p>
  </div>
</div>
</nav>
</center> 