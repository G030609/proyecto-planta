<style>
            #hea{
                text-align: center;
                padding: 15px;
                color: green;
                font-size: 45px;
            }
            </style>
            <h2 id="hea">Categorias</h2>

                <table class="table">
                    <thead>
                        <th>Nombre de la cateogoria</th>

                    </thead>
                    <tbody>
                    <?php foreach($categorias as $categoria):?>
                            <tr>
                                <th><?=$categoria->nombre_categoria?></th>
                                <td>
                                    <a href="<?=base_url('index.php/categoria/delete/'.$categoria->idCategoria);?>">Eliminar</a>
                                    <a href="<?=base_url('index.php/categoria/editar/'.$categoria->idCategoria);?>">Editar</a>
                             
                                </td>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
        </div>
    </div>
</div>