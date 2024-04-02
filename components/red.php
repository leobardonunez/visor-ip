<ul id="resultList" style="list-style:none;">
            <?php
            foreach ($ipTermterminals as $datos) {
                ?>
                <li style="display: inline-block; margin-right: 10px;">
                    <div class="card mb-3 p-2 shadow-lg m-2 rounded" style="width: 16rem; background-color:#F2F2F2;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $datos['sucursal'] ?>
                            </h5>
                            <p class="card-text">Caja 1:
                                <?php echo $datos['ip'] ?>
                                <?php if ((new CheckDevice())->ping($datos['ip'])) {
                                    ?>
                                    <span class="badge" style="background-color:gray;">Activo</span>
                                <?php } else {
                                    echo '<span class="badge bg-danger">Inactivo</span>';
                                }
                                ?>
                                <br>
                                Caja 2:
                                <?php echo $datos['ip2'] ?><br>
                                <?php
                                if ((new CheckDevice())->ping($datos['ip2'])) {
                                    ?>
                                    <span class="badge" style="background-color:gray;">Activo</span>
                                    <?php
                                } else {
                                    echo '<span class="badge bg-danger">Inactivo</span>';
                                }
                                ?><br>
                                <br>
                                <?php if ($datos['ip3'] == '') {
                                    echo 'No existe caja 3';
                                } else {

                                    if ((new CheckDevice())->ping($datos['ip3'])) {
                                        ?>
                                        Caja 3:
                                        <?php echo $datos['ip3']; ?> <span class="badge"
                                            style="background-color:gray;">Activo</span>
                                        <?php
                                    } else {
                                        echo "Caja 3: ", $datos['ip3'], '<span class="badge bg-danger">Inactivo</span>';
                                    }

                                } ?>
                            </p>
                            <button type="button" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z">
                                    </path>
                                    <path
                                        d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466">
                                    </path>
                                </svg>
                                Recargar
                            </button>
                        </div>
                    </div>
                </li>
            <?php }
            ?>
        </ul>
















<table class="table table-striped table-bordered table-sm" id="tabla" style="width:40%">
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
                    </table>