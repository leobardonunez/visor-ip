<?php

$ipRed = array(

    0 => array(
        'sucursal' => 'Jiquilpan',
        'ip' => '192.168.11.1',

    ),

    1 => array(
        'sucursal' => 'Zacatecas',
        'ip' => '192.168.12.1',

    ),
    2 => array(
        'sucursal' => 'Serdan',
        'ip' => '192.168.65.1',

    ),

    3 => array(
        'sucursal' => 'Degollado',
        'ip' => '192.168.14.1',

    ),

    4 => array(
        'sucursal' => 'Rio Fuerte',
        'ip' => '192.168.116.1',

    ),
    5 => array(
        'sucursal' => 'Toledo',
        'ip' => '192.168.16.1',

    ),

    6 => array(
        'sucursal' => 'Los Angeles',
        'ip' => '192.168.63.1',

    ),
    7 => array(
        'sucursal' => 'Jardines',
        'ip' => '192.168.18.1',

    ),

    8 => array(
        'sucursal' => 'Mañanitas',
        'ip' => '192.168.19.1',

    ),

    9 => array(
        'sucursal' => 'Ahome',
        'ip' => '192.168.20.1',

    ),

    10 => array(
        'sucursal' => 'San Miguel',
        'ip' => '192.168.21.1',

    ),

    11 => array(
        'sucursal' => 'Rosales',
        'ip' => '192.168.60.1',

    ),
    12 => array(
        'sucursal' => 'Higuera ',
        'ip' => '192.168.23.1',

    ),
    13 => array(
        'sucursal' => 'Pedro Anaya',
        'ip' => '192.168.51.1',

    ),

    14 => array(
        'sucursal' => 'Alamos',
        'ip' => '192.168.25.1',

    ),

    15 => array(
        'sucursal' => 'Topolobampo',
        'ip' => '192.168.26.1',

    ),

    16 => array(
        'sucursal' => 'Mochicahui',
        'ip' => '192.168.67.1',

    ),
    17 => array(
        'sucursal' => 'El Carrizo',
        'ip' => '192.168.30.1',

    ),

    18 => array(
        'sucursal' => 'Laureles',
        'ip' => '192.168.29.1',

    ),

    19 => array(
        'sucursal' => 'Ejido Mexico',
        'ip' => '192.168.31.1',

    ),

    20 => array(
        'sucursal' => 'Constancia',
        'ip' => '192.168.32.1',

    ),
    21 => array(
        'sucursal'=> 'Gabriel Leyva Solano',
        'ip'=> '192.168.33.1'
    )

);?>



<ul id="resultList" style="list-style:none;">
    <?php
    foreach ($ipRed as $datos) {
        ?>
        <li style="display: inline-block; margin-right: 10px;">
            <div class="card mb-3 p-2 shadow-lg m-2 rounded" style="width: 16rem; background-color:#F2F2F2;">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $datos['sucursal'] ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $datos['ip'] ?>
                        <?php if ((new CheckRed())->pingRed($datos['ip'])) {
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
















<!-- <table class="table table-striped table-bordered table-sm" id="tabla" style="width:40%">
    <tr align="center">
        <th>Sucursal</th>
        <th>Ip</th>
        <th>Estado</th>
    </tr>

    <?php
    foreach ($ipRed as $datos) {
        ?>
        <tr align="center">
            <td>
                <?php echo $datos['sucursal'] ?>
            </td>
            <td>
                <?php echo $datos['ip'] ?>
            </td>
            <?php
            if ((new CheckDevice())->ping($datos['ip'])) {
                ?>
                <td>
                    Activo
                </td>

                <?php

            } else {


                $fecha = date("Y-m-d H:i:s");

                $texto = 'Fecha y hora: ' . $fecha . ' IP: ' . $datos['ip'] . ' Sucursal: ' . ' ' . $datos['sucursal'];

                $archivo = fopen('errores.txt', 'a');

                fwrite($archivo, $texto . PHP_EOL);


                fclose($archivo);



                ?>
                <title>Fallo en red
                </title>
                <td style="background-color:red; color:white;">
                    Inactivo
                </td>
                <?php

            }
            ?>
            </td>

        </tr>
        <?php
    }
    ?>
</table> -->