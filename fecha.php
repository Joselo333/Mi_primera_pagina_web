<?php
    include(conexion.php);
    $con = conectar();
    function insertar_fecha{

        $curso= $_GET['rut']; print_r( $rut."<br/>" );

        $fecha= $_GET['fecha_nac']; print_r( $fecha."<br/>" );
        
        $f = explode('-', $fecha); 
        $sql=

        print_r( $fecha_sql."<br/>" );

        include_once ('conexion.php'); 

        $rs - mysql_query("INSERT INTO registro VALUES ('$curso', $fecha_sql' )"); or die('');
    }
?>