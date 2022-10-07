<?php 
include("conexion.php");
$conexion = conectar();

$sql = "SELECT * FROM clientes";

// msqli_query() es una función que ejecuta una consulta en la base de datos 
$query = mysqli_query($conexion, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>CRUD Clientes</title>
</head>
<body>
    <main class="main">
        <form class="main-form" method="post" action="insertar.php">
            <input type="text" name="nombre" id="nombre"  placeholder="Nombre">
            <br />
            <input type="text" name="apellido" id="apellido"  placeholder="Apellido">
            <br />
            <input type="text" name="direccion" id="direccion"  placeholder="Direccion">
            <br />

            <input type="submit" value="Crear"></input>
            <br />      
        </form>
   
            <table class="main-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $row['id']; ?></td>
                        <td style="text-align:center;"><?php echo $row['nombre']; ?></td>
                        <td style="text-align:center;"><?php echo $row['apellido']; ?></td>
                        <td style="text-align: center;"><?php echo $row['direccion']; ?></td>
                        <td>
                            <a style="color: #0F9CDC; text-decoration: none;" href="actualizar.php?id=<?php echo $row['id']; ?>">Editar</a>
                            <a style="color: red; text-decoration: none;" href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
    </div>
</body>
</html>