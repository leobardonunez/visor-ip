<?php


$ip_computadora = array(

    0 => array(
        'number' => '1',
        'sucursal' => 'Jiquilpan',
        'caja1' => '192.168.11.66',
        'caja2' => '192.168.11.68',

    ),

    1 => array(
        'number' => '2',
        'sucursal' => 'Zacatecas',
        'caja1' => '192.168.12.64',
        'caja2' => '192.168.12.69',
        'caja3' => ''

    ),
    2 => array(
        'number' => '3',
        'sucursal' => 'Serdan',
        'caja1' => '192.168.65.103',
        'caja2' => '192.168.65.106',
    ),

    3 => array(
        'number' => '4',
        'sucursal' => 'Degollado',
        'caja1' => '192.168.14.104',
        'caja2' => '192.168.14.194',
        'caja3' => '192.168.14.193'

    ),
    4 => array(
        'number' => '5',
        'sucursal' => 'Rio Fuerte',
        'caja1' => '192.168.116.197',
        'caja2' => '192.168.116.172',

    ),

    5 => array(
        'number' => '6',
        'sucursal' => 'Toledo',
        'caja1' => '192.168.16.254',
        'caja2' => '192.168.16.207',

    ),

    6 => array(
        'number' => '7',
        'sucursal' => 'Los Angeles',
        'caja1' => '192.168.17.77',
        'caja2' => '192.168.17.79',

    ),

    7 => array(
        'number' => '8',
        'sucursal' => 'Jardines',
        'caja1' => '192.168.18.230',
        'caja2' => '192.168.18.204',

    ),

    8 => array(
        'number' => '9',
        'sucursal' => 'Mañanitas',
        'caja1' => '',
        'caja2' => '192.168.19.66',

    ),

    9 => array(
        'number' => '10',
        'sucursal' => 'Ahome',
        'caja1' => '',
        'caja2' => '',
        'caja3' => ''
    ),

    10 => array(
        'number' => '11',
        'sucursal' => 'San Miguel',
        'caja1' => '',
        'caja2' => '',

    ),

    11 => array(
        'number' => '12',
        'sucursal' => 'Rosales',
        'caja1' => '192.168.22.78',
        'caja2' => '192.168.22.72'
    ),

    12 => array(
        'number' => '13',
        'sucursal' => 'Higuera de zaragoza',
        'caja1' => '',
        'caja2' => '',
        'caja3' => ''
    ),
    13 => array(
        'number' => '13',
        'sucursal' => 'Pedro anaya',
        'caja1' => '',
        'caja2' => ''
    ),
    14 => array(
        'number' => '14',
        'sucursal' => 'Alamos',
        'caja1' => '192.168.25.52',
        'caja2' => '192.168.25.118'
    ),
    15 => array(
        'number' => '15',
        'sucursal' => 'Topolobampo',
        'caja1' => '',
        'caja2' => ''
    ),
    16 => array(
        'number' => '16',
        'sucursal' => 'Mochicahui',
        'caja1' => '',
        'caja2' => ''
    ),
    17 => array(
        'number' => '17',
        'sucursal' => 'El carrizo',
        'caja1' => '',
        'caja2' => '',
        'caja3' => ''
    ),
    18 => array(
        'number' => '18',
        'sucursal' => 'Laureles',
        'caja1' => '192.168.29.183',
        'caja2' => '192.168.29.184'
    ),
    19 => array(
        'number' => '19',
        'sucursal' => 'Ejido mexico',
        'caja1' => '192.168.31.107',
        'caja2' => '192.168.31.108'
    ),
    20 => array(
        'number' => '20',
        'sucursal' => 'Constancia',
        'caja1' => '',
        'caja2' => '',
        'caja3' => ''
    )
); ?>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Sucursal</th>
            <th scope="col">Caja 1</th>
            <th scope="col">Caja 2</th>
            <th scope="col">Caja 3</th>
        </tr>
    </thead>
    <?php
    foreach ($ip_computadora as $datos) {
        ?>
        <tr>
            <th scope="row"><?php echo $datos['number'] ?></th>
            <th><?php echo $datos['sucursal'] ?></th>

<!--Añadir un modal para que muestre mas informacion del equipo de computo-->
            <th>
                <span class="badge" style="background-color:gray;">
                    <?php echo $datos['caja1'] ?>
                </span>
            <th>
                <span class="badge" style="background-color:gray;">
                    <?php echo $datos['caja2'] ?>
                </span>
            </th>



            <th>
                <span class="badge" style="background-color:gray;">
                    <?php echo $datos['caja3'] ?>
                </span>
            </th>


        </tr>
    <?php }
    ?>
    </tbody>
</table>