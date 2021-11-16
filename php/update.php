<?php
    include("conexion.php");
    $con=conectar();

    $id=$_POST['id'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $rut=$_POST['rut'];
    $direccion=$_POST['direccion'];
    $fecha_nac=$_POST['fecha_nac'];
    $sexo=$_POST['sexo'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $sql="UPDATE registro SET nombres='$nombres',apellidos='$apellidos',rut='$rut',direccion='$direccion',fecha_nac='$fecha_nac',sexo='$sexo',email='$email', pass='$pass' WHERE id='$id'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro.php");
    }else{
        echo "Hola no funca";
    }
?>