<?php
error_reporting(0);

$ipTermterminals = array(
    0 => array(
        'sucursal' => 'Jiquilpan',
        'ip' => '192.168.11.99',
        'ip2' => '192.168.11.98'
    ),
    1 => array(
        'sucursal' => 'Zacatecas',
        'ip' => '192.168.12.6',
        'ip2' => '192.168.12.5',
        'ip3' => '192.168.12.4',
    ),

    2 => array(
        'sucursal' => 'Serdan',
        'ip' => '192.168.65.4',
        'ip2' => '192.168.65.5'
    ),

    3 => array(
        'sucursal' => 'Degollado',
        'ip' => '192.168.14.4',
        'ip2' => '192.168.14.5',
        'ip3' => '192.168.14.98'
    ),
    4 => array(
        'sucursal' => 'Rio Fuerte',
        'ip' => '192.168.116.154',
        'ip2' => '192.168.116.157'
    ),
    5 => array(
        'sucursal' => 'Toledo',
        'ip' => '192.168.16.253',
        'ip2' => '192.168.16.252'
    ),
    6 => array(
        'sucursal' => 'Los Angeles',
        'ip' => '192.168.17.4',
        'ip2' => '192.168.17.5'
    ),
    7 => array(
        'sucursal' => 'Jardines',
        'ip' => '192.168.18.5',
        'ip2' => '192.168.18.4'
    ),
    8 => array(
        'sucursal' => 'Mañanitas',
        'ip' => '192.168.19.4',
        'ip2' => '192.168.19.5'
    ),
    9 => array(
        'sucursal' => 'Ahome',
        'ip' => '192.168.20.69',
        'ip2' => '192.168.20.100',
        'ip3' => '192.168.20.87'
    ),
    10 => array(
        'sucursal' => 'San Miguel',
        'ip' => '192.168.21.68',
        'ip2' => '192.168.21.71'
    ),
    11 => array(
        'sucursal' => 'Rosales',
        'ip' => '192.168.22.5',
        'ip2' => '192.168.22.4'
    ),
    12 => array(
        'sucursal' => 'Higuera de Zaragoza',
        'ip' => '192.168.20.89',
        'ip2' => '192.168.20.78',
        'ip3' => '192.168.23.10'
    ),
    13 => array(
        'sucursal' => 'Pedro Anaya',
        'ip' => '192.168.51.77',
        'ip2' => '192.168.51.75'
    ),
    14 => array(
        'sucursal' => 'Alamos',
        'ip' => '192.168.25.4',
        'ip2' => '192.168.75.5'
    ),
    15 => array(
        'sucursal' => 'Topolobampo',
        'ip' => '192.168.26.66',
        'ip2' => '192.168.26.85'
    ),
    16 => array(
        'sucursal' => 'Mochicahui',
        'ip' => '192.168.27.5',
        'ip2' => '192.168.27.4'
    ),
    17 => array(
        'sucursal' => 'El Carrizo',
        'ip' => '192.168.30.4',
        'ip2' => '192.168.30.5 ',
        'ip3' => '192.168.30.6'
    ),
    18 => array(
        'sucursal' => 'Laureles',
        'ip' => '192.168.29.5',
        'ip2' => '192.168.29.4'
    ),
    19 => array(
        'sucursal' => 'Ejido Mexico',
        'ip' => '192.168.31.5',
    ),
    20 => array(
        'sucursal' => 'Constancia',
        'ip' => '192.168.32.4',
        'ip2' => '192.168.32.5',
        'ip3' => '192.168.32.6'
    ),
    21 => array(
        'sucursal' => 'Gabriel Leyva Solano',
        'ip' => '192.168.33.74',
        'ip2' => '192.168.33.85',
        'ip3' => '192.168.33.83'
    ),

);

?>


<!---------------Modal------------->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar ip de terminal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Caja 1:</p> <input type="text" class="form-control shadow-lg" /><br>
                <p>Caja 2:</p> <input type="text" class="form-control shadow-lg" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir sin guardar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!---------------Modal------------->

<!-- <button type="button" class="btn btn-success" onclick="loadDoc()">Refrescar</button> -->
<ul id="resultList" style="list-style:none;">
    <?php
    foreach ($ipTermterminals as $datos) {
        ?>
    <li style="display: inline-block; margin-right: 10px;">
        <div class="card mb-3 p-2 shadow-lg m-2 rounded" style="width: 16rem; background-color:#F2F2F2;">
            <div class="card-body">
                <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">
                    <?php echo $datos['sucursal'] ?>
                </h5>
                <p class="card-text">Caja 1:

                    <?php if ((new CheckDevice())->ping($datos['ip'])) {
                        ?>
                    <span class="badge" style="background-color:gray;">
                        <?php echo $datos['ip'] ?>
                    </span>
                    <?php } else {
                        echo '<span class="badge bg-danger">' . $datos['ip'] . '</span>';
                    }
                    ?><br>
                    Caja 2:
                    <?php
                    if ((new CheckDevice())->ping($datos['ip2'])) {
                        ?>
                    <span class="badge" style="background-color:gray;">
                        <?php echo $datos['ip2'] ?>
                    </span>
                    <?php
                    } else {
                        echo '<span class="badge bg-danger">' . $datos['ip2'] . '</span>';
                    }
                    ?><br>

                    <?php if ($datos['ip3'] == '') {
                        echo 'No existe caja 3';
                    } else {

                        if ((new CheckDevice())->ping($datos['ip3'])) {
                            ?>
                    Caja 3:
                    <span class="badge" style="background-color:gray;">
                        <?php echo $datos['ip3']; ?>
                    </span>
                    <?php
                        } else {
                            echo "Caja 3: ", '<span class="badge bg-danger">' . $datos['ip3'] . '</span>';
                        }

                    } ?>
                </p>
            </div>
        </div>
    </li>
    <?php }
    ?>
</ul>

<script>
    //este es el metodo que lo mantendra actualizado 
    $(document).ready(function () {
        var refreshId = setInterval(function () {
            console.log("Hola")
            $('#resultList').load('index.php');//actualizas el div
        }, 4000);
    });
</script>