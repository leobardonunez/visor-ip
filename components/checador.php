
                    <table class="table table-striped table-bordered table-sm" id="tabla" style="width:40%">
                        <tr align="center">
                            <th>Sucursal</th>
                            <th>Ip</th>
                            <th>Estado</th>
                        </tr>

                        <?php
                        foreach ($ipChecadores as $datos) {
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
                                    <title>Fallo en Checador
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
          