<?php
class CheckComputadora
{
    public function myOS()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === (chr(87) . chr(73) . chr(78)))
            return false;
    }

    public function pingComputadora($ip_computadora)
    {
        if ($this->myOS()) {
            if (!exec("ping -n 1 -w 1 " . $ip_computadora . " 2>NUL > NUL && (echo 0) || (echo 1"))
                return true;
        } else {
            if (!exec("ping -q -c1 " . $ip_computadora . " >/dev/null 2>&1 ; echo $?"))
                return true;
        }
        return false;
    }
}

$ip_computadora = array(

    0 => array(
        'Sucursal' => 'Jiquilpan',
        'ip' => '192.168.',
        'ip2' => '192.168.',            
    ),

    1 => array(
        'Area' => 'Zacatecas',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.50',

    ),
    2 => array(
        'Area' => 'Serdan',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.51',

    ),

    3 => array(
        'Area' => 'Degollado',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.200',

    ),
    4 => array(
        'Area' => 'Rio Fuerte',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.200',

    ),

    5 => array(
        'Area' => 'Toledo',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.200',

    ),

    6 => array(
        'Area' => 'Los Angeles',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.200',

    ),
    
    7 => array(
        'Area' => 'Jardines',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.200',

    ),

    8 => array(
        'Area' => 'Mañanitas',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.200',

    ),

    9 => array(
        'Area' => 'Ahome',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.200',

    ),

    10 => array(
        'Area' => 'Degollado',
        'Nombre' => 'Kyocera',
        'ip' => '192.168.1.200',

    )

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
                    <button type="button" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z">
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



