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
                background: -webkit-radial-gradient(30px 50px, ellipse, #DAF7A6  10%,
                #DAF7A6  40%, #999999 90%);
            }
            #caracteristica{
                font-size: 10px;
            }
            #caracteristica{
                font: 14px verdana, sans-serif;
                border: 1px solid #98FB98;
            }
            #uso{
                font: 15px verdana, sans-serif;
                border: 1px solid #98FB98;  
            }
            #nombre{
                font: 15px verdana, sans-serif;
                border: 1px solid #98FB98;
                background-color: #98FB98; 
            }
            #lugar{
                font: 15px verdana, sans-serif;
                border: 1px solid #98FB98; 
            }

        </style>
            <h2 id="hea">Medicinales</h2>

                <table class="table">
                    <thead>
                        
                        <th id="nombres" rowspan="4">Nombre</th>
                        <th id="lugares">Lugar de origen</th>
                        <th id="caracteristicas">Caracteristicas</th>
                        <th id="usos"> Usos</th>
        

                    </thead>
                    <tbody>
                    <?php foreach($planta_medicinales as $planta_medicinal):?>
                            <tr>
                                <th id="nombre"><?=$planta_medicinal->nombre_planta?></th>
                                <th id="lugar"><?=$planta_medicinal->lugar_origen?></th>
                                <th id="caracteristica"><?=$planta_medicinal->caracteristicas?></th>
                                <th id="uso"><?=$planta_medicinal->usos?></th>
                               

                            
                                <td>
                                    <a href="<?=base_url('index.php/medicinal/delete/'.$planta_medicinal->id_medicinal);?>">Eliminar</a>
                                    <a href="<?=base_url('index.php/medicinal/editar/'.$planta_medicinal->id_medicinal);?>">Editar</a>
                             
                                </td>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
        </div>
    </div>
</div>