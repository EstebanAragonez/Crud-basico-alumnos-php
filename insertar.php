<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$edad=$_POST['edad'];
$materia=$_POST['materia'];
$docente=$_POST['docente'];
$fecha_ingreso=$_POST['fecha_ingreso'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];


$sql="INSERT INTO estudiante VALUES('$cod_estudiante','$nombres','$apellidos','$edad','$materia','$docente','$fecha_ingreso','$fecha_nacimiento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>