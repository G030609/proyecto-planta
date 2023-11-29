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
            }

        </style>
            <h2 id="hea">Plantas</h2>

                <table class="table">
                    <thead>
                        <th>Imagen</th>
                        <th rowspan="4">Nombre</th>
                        <th>Categoria</th>
                        <th>Lugar de procedencia</th>
                        <th> Usos</th>

                    </thead>
                    <tbody>
                    <?php foreach($plantas as $planta):?>
                            <tr>
                                <th><?=$planta->nombre_planta?></th>
                                <th><?=$planta->categoria?></th>
                                <th><?=$planta->lugarOrigen?></th>
                                <th><?=$planta->usos?></th>

                            
                                <td>
                                    <a href="<?=base_url('index.php/planta/delete/'.$planta->id_planta);?>">Eliminar</a>
                                    <a href="<?=base_url('index.php/planta/editar/'.$planta->id_planta);?>">Editar</a>
                             
                                </td>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
        </div>
    </div>
</div>