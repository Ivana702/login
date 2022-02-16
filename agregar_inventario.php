<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <h1>Inventario</h1>

    <?php

    include_once("conexion.php");

    $correo = $_GET['usuario'];

    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $agregarBDD = "INSERT INTO inventario (producto, cantidad, precio, correo) 
                VALUES ('$producto','$cantidad','$precio', '$correo')";

    $resultado = mysqli_query($conexion, $agregarBDD);

    $consulta = "SELECT * FROM inventario WHERE correo='$correo'"; 
    $resultado1 = mysqli_query($conexion, $consulta);

    echo '<div class="container">
            <div class="row light-blue darken-2">
                <div class="col s12 m4 l4"><p>Producto</p></div>
                <div class="col s12 m4 l4"><p>Cantidad</p></div>
                <div class="col s12 m4 l4"><p>Precio</p></div>
            </div>
        </div>';
    
        while ($obtener = mysqli_fetch_array($resultado1)) {
        
            echo '<div class="container">
                    <div class="row light-blue lighten-3">
                        <div class="col s12 m4 l4"><p>' . $obtener['producto'] . '</p></div>
                        <div class="col s12 m4 l4"><p>' . $obtener['cantidad'] . '</p></div>
                        <div class="col s12 m4 l4"><p>' . $obtener['precio'] . '</p></div>
                    </div>
                </div>';
        }

        mysqli_close($conexion);

    ?>

    </div>

    <div class="container">
        <div class="section">

        <?php
            echo '<a href="inventario.php?usuario='.$correo.'" class="waves-effect waves-light btn light-blue darken-4">Agregar más</a>';
        ?>
        </div>
    </div>

    <!--SCRIPT-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });

    </script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems,{
                duration: 500,
                indicators: true,
                fullWidth: true
            });
        });

    </script>
</body>
</html>