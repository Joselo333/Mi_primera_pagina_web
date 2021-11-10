<?php

include("conexion.php");
$con=conectar();

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$rut=$_POST['rut'];
$direccion=$_POST['direccion'];
$fecha_nac=$_POST['fecha_nac'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];

$sql="UPDATE registro SET  nombres='$nombres',apellidos='$apellidos',rut='$rut',direccion='$direccion',fecha_nac='$fecha_nac',sexo='$sexo',edad='$edad' WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro.php");
    }
?>