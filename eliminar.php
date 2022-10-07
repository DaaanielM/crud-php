<?php 
include("conexion.php");
$conexion = conectar();


$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id = $id";
$query = mysqli_query($conexion, $sql);


// si la consulta es exitosa, redirige a cliente.php
if($query){
    header("Location: cliente.php");
}

?>