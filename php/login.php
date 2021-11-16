<?php
    include("conexion.php");
    $con=conectar();

    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="SELECT * FROM registro WHERE email='$email' and pass='$pass'";
    $query=mysqli_query($con,$sql);
    $nr=mysqli_num_rows($query);

    if($nr == 1){
        header("Location: ../inicio.html");
    }else{
        header("Location: ../error_login.html");
    }

?>