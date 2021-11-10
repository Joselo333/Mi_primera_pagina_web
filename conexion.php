<?php
    function conectar(){
        $host="localhost";
        $user="root";
        $pass="Joselon251017";

        $bd="herramientas";

        $con=mysqli_connect($host,$user,$pass);

        mysqli_select_db($con,$bd);

        return $con;
    }
?>