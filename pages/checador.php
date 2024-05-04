<?php


$ipChecador = array(

    0 => array(
        'sucursal'=> 'Administracion',
        'ip' => '192.168.1.201',
    ),

    1 => array(
        'sucursal'=> 'Mayoreo',
        'ip' => '192.168.1.185',
    ),

    2 => array(
        'sucursal' => 'Jiquilpan',
        'ip' => '192.168.11.50',

    ),

    3 => array(
        'sucursal' => 'Zacatecas',
        'ip' => '192.168.12.201',

    ),
    4 => array(
        'sucursal' => 'Serdan',
        'ip' => '192.168.65.111',

    ),

    5 => array(
        'sucursal' => 'Degollado',
        'ip' => '192.168.14.201',

    ),

    6 => array(
        'sucursal' => 'Rio Fuerte',
        'ip' => '192.168.116.151',

    ),
    7 => array(
        'sucursal' => 'Toledo',
        'ip' => '192.168.16.50',

    ),
    8 => array(
        'sucursal' => 'Los Angeles',
        'ip' => '192.168.63.201',
    ),
    9 => array(
        'sucursal' => 'Jardines',
        'ip' => '192.168.18.201',

    ),

    10 => array(
        'sucursal' => 'Mañanitas',
        'ip' => '192.168.19.50',

    ),

    11 => array(
        'sucursal' => 'Ahome',
        'ip' => '192.168.20.201',

    ),

    12 => array(
        'sucursal' => 'San Miguel',
        'ip' => '192.168.21.201',

    ),

    13 => array(
        'sucursal' => 'Rosales',
        'ip' => '192.168.60.50',

    ),
    14 => array(
        'sucursal' => 'Higuera ',
        'ip' => '192.168.23.201',

    ),
    15 => array(
        'sucursal' => 'Pedro Anaya',
        'ip' => '192.168.51.50',

    ),

    16 => array(
        'sucursal' => 'Alamos',
        'ip' => '192.168.25.127',

    ),

    17 => array(
        'sucursal' => 'Topolobampo',
        'ip' => '192.168.26.83',

    ),

    18 => array(
        'sucursal' => 'Mochicahui',
        'ip' => '192.168.67.210',

    ),
    19 => array(
        'sucursal' => 'El Carrizo',
        'ip' => '192.168.30.50',

    ),

    20 => array(
        'sucursal' => 'Laureles',
        'ip' => '192.168.29.181',

    ),

    21 => array(
        'sucursal' => 'Ejido Mexico',
        'ip' => '192.168.31.200',

    ),

    22 => array(
        'sucursal' => 'Constancia',
        'ip' => '192.168.32.50',

    )

);?>

                    

<ul id="resultList" style="list-style:none;">
    <?php
    foreach ($ipChecador as $datos) {
        ?>
        <li style="display: inline-block; margin-right: 10px;">
            <div class="card mb-3 p-2 shadow-lg m-2 rounded" style="width: 16rem; background-color:#F2F2F2;">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $datos['sucursal'] ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $datos['ip'] ?>
                        <?php if ((new CheckChecador())->pingChecador($datos['ip'])) {
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

                   
          