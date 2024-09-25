<?php


$ip_servidor = array(

    0 => array(
        'number' => '1',
        'nombre' => 'Contpaq',
        'caja1' => '192.168.1.103'        

    ),

    1 => array(
        'number' => '2',
        'nombre' => 'Suite',
        'caja1' => '192.168.1.102'        

    ),
    2 => array(
        'number' => '3',
        'nombre' => 'Respaldo',
        'caja1' => '192.168.1.104'        
    )
); ?>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Ip</th>            
        </tr>
    </thead>
    <?php
    foreach ($ip_servidor as $datos) {
        ?>
        <tr>
            <th scope="row"><?php echo $datos['number'] ?></th>
            <th><?php echo $datos['nombre'] ?></th>

<!--Añadir un modal para que muestre mas informacion del equipo de computo-->
            <th>
                <span class="badge" style="background-color:gray;">
                    <?php echo $datos['caja1'] ?>
                </span>
            </th>
        </tr>
    <?php }
    ?>
    </tbody>
</table>