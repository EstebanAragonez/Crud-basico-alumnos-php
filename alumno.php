<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM estudiante";
$query = mysqli_query($con, $sql);

// $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> PAGINA ALUMNO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="estilos.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div>
    <nav class="navbar" style="background-color: #3e59f1;">
                <div class="container-fluid">
                    <a class="navbar-brand" style="color: white;" href="#">
                        <img src="https://josemaxleon.edu.co/wp-content/uploads/2021/01/Icono.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                        COLEGIO
                    </a>
                </div>
            </nav>
        <div class="row" style="margin-left: 5rem; margin-top: 2rem;">
            <div class="col-md-3">
                <h2>Por favor
                    <br>ingrese
                    <br>los datos
                    <br>del alumno
                </h2>
                <form action="insertar.php" method="POST">

                    <input type="number" class="form-control mb-3" name="cod_estudiante" placeholder="cod estudiante">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos">
                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                    <input type="text" class="form-control mb-3" name="materia" placeholder="Materia">
                    <input type="text" class="form-control mb-3" name="docente" placeholder="Docente">
                    Fecha de ingreso:
                    <input type="date" class="form-control mb-3" name="fecha_ingreso">
                    Fecha de nacimiento:
                    <input type="date" class="form-control mb-3" name="fecha_nacimiento">

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table table-striped">
                    <thead class="table" style="background-color: #3e59f1; color: white; ">
                        <tr>
                            <th>Codigo</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Edad</th>
                            <th>Materia</th>
                            <th>Docente</th>
                            <th>Fecha de Ingreso</th>
                            <th>Fecha de nacimeinto</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['cod_estudiante'] ?></th>
                                <th><?php echo $row['nombre'] ?></th>
                                <th><?php echo $row['apellido'] ?></th>
                                <th><?php echo $row['edad'] ?></th>
                                <th><?php echo $row['materia'] ?></th>
                                <th><?php echo $row['docente'] ?></th>
                                <th><?php echo $row['fecha_ingreso'] ?></th>
                                <th><?php echo $row['fecha_nacimiento'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>