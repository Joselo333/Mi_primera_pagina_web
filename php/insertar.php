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

    $sql="INSERT INTO registro VALUES('$id','$nombres','$apellidos','$rut','$direccion','$fecha_nac','$sexo','$email','$pass')";
    $query= mysqli_query($con, $sql);

    if($query){
        Header("Location: ../index.html");
    }else {
    }
?>
