<?php

include_once("conexion.php");

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$consulta = "SELECT * FROM registro WHERE correo='$correo' and contraseña='$contraseña'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("Location: inventario.php?usuario=$correo");
}
else{
    include("index.php");
    ?>
    <script>
        alert("Los datos ingresados son incorrectos");
    </script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>