<?php


$ip_computadora = array(

    0 => array(
        'number'=> '1',
        'sucursal' => 'Jiquilpan',
        'caja1' => '192.168.11.98',
        'caja2' => '192.168.11.99',
                            
    ),

    1 => array(
        'number'=> '2',
        'sucursal' => 'Zacatecas',
        'caja1' => '192.168.',
        'caja2' => '192.168.',
        'caja3' => '192.168.'

    ),
    2 => array(
        'number'=> '3',
        'sucursal' => 'Serdan',
        'caja1' => '192.168.',
        'caja2' => '192.168.1.51',        
    ),

    3 => array(
        'number'=> '4',
        'sucursal' => 'Degollado',
        'caja1' => '192.168.',
        'caja2' => '192.168.1.200',
        'caja3'=> '192.168.'

    ),
    4 => array(
        'number'=> '5',
        'sucursal' => 'Rio Fuerte',
        'caja1' => '192.168.',
        'caja2' => '192.168.1.200',

    ),

    5 => array(
        'number'=> '6',
        'sucursal' => 'Toledo',
        'caja1' => '192.168.',
        'caja2' => '192.168.1.200',

    ),

    6 => array(
        'number'=> '7',
        'sucursal' => 'Los Angeles',
        'caja1' => '192.168.',
        'caja2' => '192.168.1.200',

    ),
    
    7 => array(
        'number'=> '8',
        'sucursal' => 'Jardines',
        'caja1' => '192.168.',
        'caja2' => '192.168.1.200',

    ),

    8 => array(
        'number'=> '9',
        'sucursal' => 'Mañanitas',
        'caja1' => '192.168.',
        'caja2' => '192.168.1.200',

    ),

    9 => array(
        'number'=> '10',
        'sucursal' => 'Ahome',
        'caja1' => '192.168.',
        'caja2' => '192.168.1.200',
        'caja3' =>'192.168.'
    ),

    10 => array(
        'number'=> '11',
        'sucursal' => 'San Miguel',
        'caja1' => 'Kyocera',
        'caja2' => '192.168.1.200',

    ),

    11 => array(
        'number'=> '12',
        'sucursal'=> 'Rosales',
        'caja1'=>'192.168.',
        'caja2'=> '192.168.'
    ),

    12 => array(
        'number'=>'13',
        'sucursal'=> 'Higuera de zaragoza',
        'caja1'=> '192.168.',
        'caja2'=> '192.168',
        'caja3'=> '192.168'
    ),
    13=> array(
        'number'=> '13',
        'sucursal' =>'Pedro anaya',
        'caja1'=> '192.168.',
        'caja2'=> '192.168.'
    ),
    14=> array(
        'number'=>'14',
        'sucursal'=>'Alamos',
        'caja1'=>'192.168.',
        'caja2'=> '192.168.'
    ),
    15=> array(
        'number'=>'15',
        'sucursal'=>'Topolobampo',
        'caja1'=> '192.168.',
        'caja2'=> '192.168.'
    ),
    16=> array(
        'number'=> '16',
        'sucursal'=> 'Mochicahui',
        'caja1'=> '192.168.',
        'caja2'=>'192.168.'
    ),
    17=> array(
        'number'=> '17',
        'sucursal'=> 'El carrizo',
        'caja1'=> '192.168.',
        'caja2'=>'192.168.',
        'caja3'=> '192.168'
    ),
    18=> array(
        'number'=> '18',
        'sucursal'=> 'Laureles',
        'caja1'=> '192.168.',
        'caja2'=>'192.168.'
    ),
    19=> array(
        'number'=> '19',
        'sucursal'=> 'Ejido mexico',
        'caja1'=> '192.168.',
        'caja2'=>'192.168.'
    ),
    20=> array(
        'number'=> '20',
        'sucursal'=> 'Constancia',
        'caja1'=> '192.168.',
        'caja2'=>'192.168.',
        'caja3'=> '192.168.'
    )
);?>
<br>
<table>
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
    foreach ($ip_computadora as $datos){    
    ?>
    <tr>
        <th scope="row"><?php echo $datos['number']?></th>
        <th><?php echo $datos['sucursal']?></th>
        <th><?php echo $datos['caja1'];
      
        if ((new CheckComputadora())->pingCpu($datos['caja1'])){
            echo '<span class="badge" style="background-color:gray;">Activo</span>'; }
             else{
        echo '<span class="badge bg-danger">Inactivo</span>';
    }    
    ?>    
    </th>
    <th><?php echo $datos['caja2'];
               if ((new CheckComputadora())->pingCpu($datos['caja2'])){
                echo '<span class="badge" style="background-color:gray;">Activo</span>'; }
                 else{
            echo '<span class="badge bg-danger">Inactivo</span>';
        }   
    ?>
    </th>
    <th><?php echo $datos['caja3'];
               if ((new CheckComputadora())->pingCpu($datos['caja3'])){
                echo '<span class="badge" style="background-color:gray;">Activo</span>'; }
                 else{
            echo '<span class="badge bg-danger">Inactivo</span>';
        }   
    ?>
    </th>
    </tr>
    <?php }
    ?>    
  </tbody>
</table>
