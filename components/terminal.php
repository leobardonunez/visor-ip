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
                        </div>
                    </div>
                </li>
            <?php }
            ?>
        </ul>