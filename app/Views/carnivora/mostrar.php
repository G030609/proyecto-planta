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
                background: -webkit-radial-gradient(30px 50px, ellipse, #FF5733 10%,
                #E9967A 40%, #999999 90%);
            }
            #caracteristica{
                font-size: 10px;
            }
            #caracteristica{
                font: 14px verdana, sans-serif;
                border: 1px solid red;
            }
            #uso{
                font: 15px verdana, sans-serif;  
                border: 1px solid red;
            }
            #nombre{
                font: 15px verdana, sans-serif; 
                border: 1px solid red;
                background-color: #FF5733;
            }
            #lugar{
                font: 15px verdana, sans-serif;
                border: 1px solid red; 
            }

        </style>
            <h2 id="hea">Carnivoras</h2>

                <table class="table">
                    <thead>
                        
                        <th id="nombres" rowspan="4">Nombre</th>
                        <th id="lugares">Lugar de origen</th>
                        <th id="caracteristicas">Caracteristicas</th>
                        <th id="usos"> Usos</th>
        

                    </thead>
                    <tbody>
                    <?php foreach($planta_carnivoras as $planta_carnivora):?>
                            <tr>
                                <th id="nombre"><?=$planta_carnivora->nombre_planta?></th>
                                <th id="lugar"><?=$planta_carnivora->lugar_origen?></th>
                                <th id="caracteristica"><?=$planta_carnivora->caracteristicas?></th>
                                <th id="uso"><?=$planta_carnivora->usos?></th>
                               

                            
                                <td>
                                    <a href="<?=base_url('index.php/carnivora/delete/'.$planta_carnivora->id_carnicora);?>">Eliminar</a>
                                    <a href="<?=base_url('index.php/carnivora/editar/'.$planta_carnivora->id_carnicora);?>">Editar</a>
                             
                                </td>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
        </div>
    </div>
</div>