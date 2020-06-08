<?php $pg ="inicio"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--Menu de navegacion -->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css"> <!-- siempre mis estilos al final-->
    <title>Inicio</title>
</head>
<body class="img2">

<div id="home" class="container-fluid">


    <?php 
    include_once("menu.php");

    ?>

    

    <div class="container">
    <section id="home">
        
        <div class="row py-5 mt-5">
            <div class="col-10 mb-3">
                <span>Hola!</span>
            <h1>  Bienvenido a mi web </h1>
            <h2> Desarrolladora web full stack.</h2>
            <a href="portfolio.php" class="btn"> Ver mis proyectos</a>
            </div>

        </div>
    </section>
    </div>
</div>

<div>
    
</div>


    <footer>
       
    <?php
    include_once("footer.php");


    ?>
    
    
    </footer>
   

 
    
</body>
</html>