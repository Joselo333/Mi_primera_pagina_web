<?php
    include("conexion.php");
    $con = conectar();
    
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $rut=$_POST['rut'];
    $direccion=$_POST['direccion'];
    $fecha_nac=$_POST['fecha_nac'];
    $sexo=$_POST['sexo'];
    $edad=$_POST['edad'];

    $sql="INSERT INTO registro VALUES('$nombres','$apellidos','$rut','$direccion','$fecha_nac','$sexo','$edad')";
    $query= mysqli_query($con, $sql);

    if($query){
        Header("Location: registro.php");
    }else { 
        echo "NO SE CONCRETO LA ACCION";
    }
?>
