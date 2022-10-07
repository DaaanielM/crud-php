<?php  
include("conexion.php");
$conexion = conectar();

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];

$sql = "UPDATE clientes SET nombre = '$nombre', apellido = '$apellido', direccion = '$direccion' WHERE id = $id";
$query = mysqli_query($conexion, $sql);

    if($query){
        Header("Location: cliente.php");
    }


?>