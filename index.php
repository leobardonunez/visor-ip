<?php
error_reporting(0);
class CheckTerminals
{
    public function myOS()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === (chr(87) . chr(73) . chr(78)))
            return false;
    }

    public function ping2($ip_addr2)
    {
        if ($this->myOS()) {
            if (!exec("ping -n 1 -w 1 " . $ip_addr2 . " 2>NUL > NUL && (echo 0) || (echo 1"))
                return true;
        } else {
            if (!exec("ping -q -c1 " . $ip_addr2 . " >/dev/null 2>&1 ; echo $?"))
                return true;
        }
        return false;
    }
}

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
        'ip' => '192.168.116.156',
        'ip2' => '192.168.116.157'
    ),
    5 => array(
        'sucursal' => 'Toledo',
        'ip' => '192.168.16.253',
        'ip2' => '192.168.16.252'
    ),
    6 => array(
        'sucursal' => 'Los Angeles',
        'ip' => '192.168.63.4',
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
        'ip' => '192.168.22.59',
        'ip2' => '192.168.22.76'
    ),
    12 => array(
        'sucursal' => 'Higuera de Zaragoza',
        'ip' => '192.168.23.85',
        'ip2' => '192.168.23.84',
        'ip3' => '192.168.23.83'
    ),
    13 => array(
        'sucursal' => 'Pedro Anaya',
        'ip' => '192.168.51.77',
        'ip2' => '192.168.51.70'
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
        'ip' => '192.168.30.158',
        'ip2' => '192.168.30.157 ',
        'ip3' => '192.168.30.156'
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
    )

);
class CheckDevice
{

    public function myOS()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === (chr(87) . chr(73) . chr(78)))
            return true;

        return false;
    }

    public function ping($ip_addr)
    {
        if ($this->myOS()) {
            if (!exec("ping -n 1 -w 1 " . $ip_addr . " 2>NUL > NUL && (echo 0) || (echo 1)"))
                return true;
        } else {
            if (!exec("ping -q -c1 " . $ip_addr . " >/dev/null 2>&1 ; echo $?"))
                return true;
        }

        return false;
    }
}


$ipTerm = array(

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
        'ip' => '192.168.17.1',

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
        'ip' => '192.168.22.1',

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
        'ip' => '192.168.27.1',

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

    )

);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--styles.css-->
    <link href="styles.css" rel="stylesheet" />
    <!--styles.css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Panel de equipos</title>
</head>
<br><br>
<!--Actualizaciones: añadir link a ip para que se abra ventana de cmd con un ping sostenido a esa ip-->

<body>
    <div class="row">
        <div class="col"></div>
        <div class="col">

            <h1>Visor de estado de red</h1>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-terminal-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-terminal" type="button" role="tab" aria-controls="pills-terminal"
                        aria-selected="true">Terminales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Red en sucursal</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Checadores</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-computadoras-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-computadoras" type="button" role="tab" aria-controls="pills-computadoras"
                        aria-selected="false">Computadoras</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-impresoras-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-impresoras" type="button" role="tab" aria-controls="pills-impresoras"
                        aria-selected="false">Impresoras</button>
                </li>
            </ul>
        </div>
        <div class="col"></div>
    </div>

    <div class="container">
        <div class="input-group mb-3 search-container">
            <button class="btn btn-outline-secondary" type="button" id="btn-buscar">Buscar</button>
            <input type="text" class="form-control" placeholder="Buscar..." id="searchInput"
                style="display: inline-block; margin-right: 10px;">
        </div>


        <div class="row">
            <!--tabs-->
            <div class="tab-content" id="pills-tabContent">


                <!-- Terminal-->
                <div class="tab-pane active" id="pills-terminal" role="tabpanel" aria-labelledby="pills-terminal-tab"
                    tabindex="0">
                    <?php require ('components/terminal.php'); ?>
                </div>
                <!-- Terminal-->


                <!--Red en sucursal-->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <?php require ('components/red.php'); ?>
                </div>
                <!--Red en sucursal-->



                <!--Checadores-->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">
                    <?php require ('components/checador.php'); ?>
                </div>
                <!--Checadores-->



                <!--computadoras-->
                <div class="tab-pane fade" id="pills-computadoras" role="tabpanel"
                    aria-labelledby="pills-computadoras-tab" tabindex="0">
                    <?php require ('components/computadora.php'); ?>
                </div>
                <!--computadoras-->


                <!--Impresora-->
                <div class="tab-pane fade" id="pills-impresoras" role="tabpanel" 
                aria-labelledby="pills-impresoras-tab" tabindex="0">
                    <?php require ('components/impresora.php'); ?>
                </div>
                <!--Impresora-->                    



                <!--Tabs-->
            </div>
        </div>
    </div>
</body>
<!--Js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        var input = document.getElementById("searchInput");
        var list = document.getElementById("resultList");
        var items = list.getElementsByTagName("li");
        input.addEventListener("input", function () {
            var searchTerm = input.value.toLowerCase();
            for (var i = 0; i < items.length; i++) {
                var item = items[i];
                var text = item.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            }
        });
    });
</script>

</html>




















<?php

// if ((new CheckDevice())->ping($ip_addr))
//     echo $ip_addr, " Está funcionando correctamente";
// else
//     echo $ip_addr, " No está funcionando correctamente";
?>

<script>
    (() => {
        // Se recarga cada 5 minutos o bien cada 300 segundos
        setInterval("location.reload()", 300000);
        // setInterval("location.reload()", 180000);
        // setInterval("location.reload()", 15000);
    })();
</script>