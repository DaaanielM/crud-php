<?php  

include("conexion.php");
$conexion = conectar();

if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];

    $sql = "INSERT INTO clientes (nombre, apellido, direccion) VALUES ('$nombre', '$apellido', '$direccion')";
    $query = mysqli_query($conexion, $sql);

    if($query){
        header("Location: cliente.php");
    }else{
        echo "F";
    }
}


?>