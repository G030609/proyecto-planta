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
                background: -webkit-radial-gradient(30px 50px, ellipse, green 10%,
                            greenyellow 70%, #999999 90%);
            }
            #caracteristica{
                font-size: 10px;
            }
            #caracteristica{
                font: 14px verdana, sans-serif;
                border: 1px solid #00ff00;

            }
            #uso{
                font: 15px verdana, sans-serif;
                border: 1px solid #00ff00;  
            }
            #nombre{
                font: 15px verdana, sans-serif; 
                border: 1px solid #00ff00;
                background-color: #00ff00;
            }
            #lugar{
                font: 15px verdana, sans-serif; 
                border: 1px solid #00ff00;
            }

        </style>
            <h2 id="hea">Hierbas</h2>

                <table class="table">
                    <thead>
                        
                        <th id="nombres" rowspan="4">Nombre</th>
                        <th id="lugares">Lugar de origen</th>
                        <th id="caracteristicas">Caracteristicas</th>
                        <th id="usos"> Usos</th>
        

                    </thead>
                    <tbody>
                    <?php foreach($planta_hierbas as $planta_hierba):?>
                            <tr>
                                <th id="nombre"><?=$planta_hierba->nombre_planta?></th>
                                <th id="lugar"><?=$planta_hierba->lugar_origen?></th>
                                <th id="caracteristica"><?=$planta_hierba->caracteristicas?></th>
                                <th id="uso"><?=$planta_hierba->usos?></th>
                               

                            
                                <td>
                                    <a href="<?=base_url('index.php/hierba/delete/'.$planta_hierba->id_hierba);?>">Eliminar</a>
                                    <a href="<?=base_url('index.php/hierba/editar/'.$planta_hierba->id_hierba);?>">Editar</a>
                             
                                </td>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
        </div>
    </div>
</div>