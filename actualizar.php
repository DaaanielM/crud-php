<?php  
include("conexion.php");
$conexion = conectar();

$id = $_GET['id'];


$sql = "SELECT * FROM clientes WHERE id = $id";
$query = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="styles.css">

    <title>Actualizar</title>
</head>
<body>
<main class="main">
        <form class="main-form" method="post" action="update.php">
            <input type="hidden" name="id" id="nombre" value="<?php echo $row['id'] ?>" >
            <br />
            <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre'] ?>"  placeholder="Nombre">
            <br />
            <input type="text" name="apellido" id="apellido" value="<?php echo $row['apellido'] ?>"  placeholder="Apellido">
            <br />
            <input type="text" name="direccion" id="direccion" value="<?php echo $row['direccion'] ?>" placeholder="Direccion">
            <br />

            <input type="submit" value="Actualizar"></input>
            <br />      
        </form>
</main>
</body>
</html>