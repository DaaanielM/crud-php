<?php  
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd="clientes";
    $conexion = mysqli_connect($host, $user, $pass);
    mysqli_select_db($conexion, $bd);

    return $conexion;
}


?>