<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM estudiante WHERE cod_estudiante='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    <input type="hidden" class="form-control mb-3" name="cod_estudiante" placeholder="cod estudiante" value="<?php echo $row['cod_estudiante']  ?>">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']  ?>">
                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos" value="<?php echo $row['apellido']  ?>">
                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad']  ?>">
                    <input type="text" class="form-control mb-3" name="materia" placeholder="Materia"value="<?php echo $row['materia']  ?>">
                    <input type="text" class="form-control mb-3" name="docente" placeholder="Docente" value="<?php echo $row['docente']  ?>">
                    Fecha de ingreso:
                    <input type="date" class="form-control mb-3" name="fecha_ingreso"value="<?php echo $row['fecha_ingreso']  ?>">
                    Fecha de nacimiento:
                    <input type="date" class="form-control mb-3" name="fecha_nacimiento"value="<?php echo $row['fecha_nacimiento']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>