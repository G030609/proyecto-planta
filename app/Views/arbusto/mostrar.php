<div class="container">
    <div class="row">
        <div class="col-12">

        <style>
            #hea{
                text-align: center;
                padding: 15px;
                color: green;
                font-size: 45px;
                text-shadow: rgb(150, 150, 150) 3px 3px 5px; 
                border-radius: 20px;
                background: -webkit-radial-gradient(30px 50px, ellipse, greenyellow 10%,
                #E9967A 40%, #999999 90%);
            }
            #caracteristica{
                font-size: 10px;
            }
            #caracteristica{
                font: 14px verdana, sans-serif;
                border: 1px solid green;
            }
            #uso{
                font: 15px verdana, sans-serif;  
                border: 1px solid green;
            }
            #nombre{
                font: 15px verdana, sans-serif; 
                border: 1px solid green;
                background-color: greenyellow;
            }
            #lugar{
                font: 15px verdana, sans-serif; 
                border: 1px solid green;
            }
            #bot{
                font: bold;
                color: black;
            }


        </style>
            <h2 id="hea">Arbustos</h2>

                <table class="table">
                    <thead>
                        
                        <th id="nombres" rowspan="4">Nombre</th>
                        <th id="lugares">Lugar de origen</th>
                        <th id="caracteristicas">Caracteristicas</th>
                        <th id="usos"> Usos</th>
        

                    </thead>
                    <tbody>
                    <?php foreach($planta_arbustos as $planta_arbusto):?>
                            <tr>
                                <th id="nombre"><?=$planta_arbusto->nombre_planta?></th>
                                <th id="lugar"><?=$planta_arbusto->lugar_origen?></th>
                                <th id="caracteristica"><?=$planta_arbusto->caracteristicas?></th>
                                <th id="uso"><?=$planta_arbusto->usos?></th>
                               

                            
                                <td >
                                    <a id="bot" href="<?=base_url('index.php/arbusto/delete/'.$planta_arbusto->id_arbusto);?>" >Eliminar</a>
                                    <a id="bot"  href="<?=base_url('index.php/arbusto/editar/'.$planta_arbusto->id_arbusto);?>">Editar</a>
                             
                                </td>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
        </div>
    </div>
</div>