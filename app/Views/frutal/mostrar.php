<div class="container">
    <div class="row">
        <div class="col-12">

        <style>
            #hea{
                text-align: center;
                padding: 15px;
                border-radius: 20px;
                color: black;
                font-size: 45px;
                text-shadow: rgb(150, 150, 150) 3px 3px 5px; 
                background: -webkit-radial-gradient(30px 50px, ellipse, green 10%,
                #E9967A 40%, #999999 90%);
            }
            #caracteristica{
                font-size: 10px;
            }
            #caracteristica{
                font: 14px verdana, sans-serif;
                border: 1px solid #FFC000;
            }
            #uso{
                font: 15px verdana, sans-serif; 
                border: 1px solid #FFC000; 
            }
            #nombre{
                font: 15px verdana, sans-serif; 
                border: 1px solid #FFC000;
                background-color: #FFC000;
            }
            #lugar{
                font: 15px verdana, sans-serif; 
                border: 1px solid #FFC000;
            }

        </style>
            <h2 id="hea">Plantas Frutales</h2>
            <!-Inicio de la tabla en la que se mostrara los siguientes datos->
                <table class="table">
                    <thead>
                        
                        <th id="nombres" rowspan="4">Nombre</th>
                        <th id="lugares">Lugar de origen</th>
                        <th id="caracteristicas">Caracteristicas</th>
                        <th id="usos"> Usos</th>
        
                
                    </thead>
                    <tbody>
                    <?php foreach($planta_frutales as $planta_frutal):?>
                            <tr>
                                <th id="nombre"><?=$planta_frutal->nombre_planta?></th>
                                <th id="lugar"><?=$planta_frutal->lugar_origen?></th>
                                <th id="caracteristica"><?=$planta_frutal->caracteristicas?></th>
                                <th id="uso"><?=$planta_frutal->usos?></th>
                               

                            
                                <td>
                                    <a href="<?=base_url('index.php/hierba/delete/'.$planta_frutal->id_frutal);?>">Eliminar</a>
                                    <a href="<?=base_url('index.php/hierba/editar/'.$planta_frutal->id_frutal);?>">Editar</a>
                             
                                </td>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
        </div>
    </div>
</div>