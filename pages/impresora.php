<?php


$ip_impresora = array(

    0 => array(
        'Area' => 'RH',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.200',

    ),

    1 => array(
        'Area' => 'Recepcion',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.50',
    ),
    
    2 => array(
        'Area' => 'Cajas',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.49',

    ),

    3 => array(
        'Area' => 'Servicio a Domicilio',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.51',

    ),
    4 => array(
        'Area' => 'Supervisores Planta',
        'Nombre' => 'Samsung',
        'ip' => '192.168.55.172',
    ),
    5 => array(
        'Area' => 'No se',
        'Nombre'=> 'Hp Laser 107w',
        'ip'=> '192.168.55.127',
    ),
    6 => array(
        'Area' => 'Oficina Eliezer',
        'Nombre' => 'Hp LaserJet M15w',
        'ip'=> '192.168.55.101'
    ),

);?>



<ul id="resultList" style="list-style:none;">
    <?php
    foreach ($ip_impresora as $datos) {
        ?>
        <li style="display: inline-block; margin-right: 10px;">
            <div class="card mb-3 p-2 shadow-lg m-2 rounded" style="width: 16rem; background-color:#F2F2F2;">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $datos['Area'] ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $datos['ip'] ?>
                        <?php if ((new CheckImpresora())->pingImpresora($datos['ip'])) {
                            ?>
                            <span class="badge" style="background-color:gray;">Activo</span>
                        <?php } else {
                            echo '<span class="badge bg-danger">Inactivo</span>';
                        }
                        ?>
                    </p>                  
                </div>
            </div>
        </li>
    <?php }
    ?>
</ul>



