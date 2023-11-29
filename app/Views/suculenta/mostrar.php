<div class="container">
    <div class="row">
        <div class="col-12">

            <style>
                #hea {
                    text-align: center;
                    padding: 15px;
                    color: green;
                    font-size: 45px;
                    text-shadow: rgb(150, 150, 150) 3px 3px 5px;
                    border-radius: 20px;
                    background: -webkit-radial-gradient(30px 50px, ellipse, yellow 10%,
                            #666666 70%, #999999 90%);
                }

                #caracteristica {
                    font-size: 10px;
                }

                #caracteristica {
                    font: 14px verdana, sans-serif;
                    border: 1px solid 	#6B8E23;
                }

                #uso {
                    font: 15px verdana, sans-serif;
                    border: 1px solid 	#6B8E23;
                }

                #nombre {
                    font: 15px verdana, sans-serif;
                    border: 1px solid 	#6B8E23;
                    background-color: 	#6B8E23;
                }

                #lugar {
                    font: 15px verdana, sans-serif;
                    border: 1px solid 	#6B8E23;
                }
            </style>
            <h2 id="hea">Suculentas</h2>

            <table class="table">
                <thead>

                    <th id="nombres" rowspan="4">Nombre</th>
                    <th id="lugares">Lugar de origen</th>
                    <th id="caracteristicas">Caracteristicas</th>
                    <th id="usos"> Usos</th>


                </thead>
                <tbody>
                    <?php foreach ($planta_suculentas as $planta_suculenta) : ?>
                        <tr>
                            <th id="nombre"><?= $planta_suculenta->nombre_planta ?></th>
                            <th id="lugar"><?= $planta_suculenta->lugar_origen ?></th>
                            <th id="caracteristica"><?= $planta_suculenta->caracteristicas ?></th>
                            <th id="uso"><?= $planta_suculenta->usos ?></th>



                            <td>
                                <a href="<?= base_url('index.php/suculenta/delete/' . $planta_suculenta->id_suculenta); ?>">Eliminar</a>
                                <a href="<?= base_url('index.php/suculenta/editar/' . $planta_suculenta->id_suculenta); ?>">Editar</a>

                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>