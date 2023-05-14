<?php
  require_once('../controller/C_consultas.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parallel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jgthms/minireset.css@master/minireset.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/welcomeStyles.css">
</head>
<body class="background">
    <?php
    require_once 'header.php';
    ?>
    <h1 class="titulo">Busca tu vuelo</h1>
    <section class="buscador">
        <form class="row g-3" method="POST" action="consulta_vuelos.php">
            <div class="col-auto">
                <label for="ruta">Ruta</label>
                <select class="form-control" name="ruta">
                    <?php
                        foreach($rutas as $ruta){
                            $id = $ruta['id_ruta'];
                            echo"<option value='$id'>".$ruta['descripcion']."</option>";
                            }
                    ?>
                </select>
            </div>
            <div class="col-auto">
                <label for="inputPassword2">Fecha</label>
                <input type="date" name="fecha">
            </div>
            <div class="col-auto">
                <input class="btn-buscar" type="submit" name="buscar_ruta" value="Consultar">
            </div>
        </form>
    </section>
    <section>
        <div class="container text-center sites">
            <div class="row align-items-center site">
                <div class="col site-img">
                    <img src="images/landing/Cartagena.jpg" alt="">
                    <h2>Cartagena</h2>
                    <p>Descubre la belleza de Cartagena. Playas impresionantes, una historia fascinante y cultura vibrante, acompañado de diferentes islas lejanas.</p>
                </div>
                <div class="col site-img">
                    <img src="images/landing/Medellin.jpg" alt="">
                    <h2>Medellín</h2>
                    <p>Descubre Medellín, una ciudad llena de vida en Colombia. Disfruta de su clima primaveral, sus impresionantes vistas y su vibrante cultura.</p>
                </div>
                <div class="col site-img">
                    <img src="images/landing/Turbo.jpg" alt="">
                    <h2>Turbo</h2>
                    <p>Descubre Turbo en la costa caribeña de Colombia: playas paradisíacas, selva tropical y cultura local te esperan en esta joya escondida.</p>
                </div>
                <div class="col site-img">
                    <img src="images/landing/Apartado.jpg" alt="">
                    <h2>Apartadó</h2>
                    <p>Descubre la mejor ciudad del Urabá. Montañas tropicales y banquetes culinarios extraordinarios por desucubrir en todo lugar ¡Te esperamos!</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>