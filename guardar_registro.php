<?php

include_once("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$agregarBDD = "INSERT INTO registro (nombre, apellido, cedula, correo, contraseña) 
                VALUES ('$nombre','$apellido','$cedula','$correo','$contraseña')";

$resultado = mysqli_query($conexion, $agregarBDD);

mysqli_close($conexion);

header("Location: index.php");

?>