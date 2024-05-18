<?php
error_reporting(0);

$ipTermBasculas = array(
    0 => array(
        'sucursal' => 'Gabriel Leyva Solano',
        'ip' => '192.168.33.79',
        'ip2' => ''
     ),
);

?>


<!-- <ul id="resultList" style="list-style:none;">
    <?php
    foreach ($ipTermBasculas as $datos) {
        ?>
    <li style="display: inline-block; margin-right: 10px;">
        <div class="card mb-3 p-2 shadow-lg m-2 rounded" style="width: 16rem; background-color:#F2F2F2;">
            <div class="card-body">
                <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">
                    <?php echo $datos['sucursal'] ?>
                </h5>
                <p class="card-text">Bascula 1:

                  
                <?php echo $datos['Area'] ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $datos['ip'] ?>
                        <?php if ((new CheckBascula())->pingBascula($datos['ip'])) {
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
</ul> -->

<!-- <script>
    //este es el metodo que lo mantendra actualizado 
    $(document).ready(function () {
        var refreshId = setInterval(function () {
            console.log("Hola")
            $('#resultList').load('index.php');//actualizas el div
        }, 4000);
    });
</script> -->

<h5>hola</h5>