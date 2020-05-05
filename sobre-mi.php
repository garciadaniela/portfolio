<?php $pg = "sobre-mi"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--Menu de navegacion -->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css"> <!-- siempre mis estilos al final-->
    <title>Sobre mi</title>
</head>

<body>


    <?php
    include_once("menu.php");

    ?>

    <section id="sobremi">
        <div class="container">

            <div class="row py-5 img3">
                <div class="col-sm-6 col-12 order-2 order-sm-1">
                    <h1>
                        Sobre mí <br>
                    </h1>
                    <p>
                        Desarrolladora Web Full Stack en desarrollo. Soy una persona emprendedora, que adora los retos y no se rinde fácilmente, cada día se aprende algo nuevo.
                    </p>
                    <a href="#" class="btn" target="_blank"> Descargar CV</a>
                </div>
                <div class="col-sm-6 col-12 order-1 order-sm-2">
                    <img src="images/daniela.jpg" alt="Foto de perfil" class="rounded-circle" style="margin-left: 85px; width: 60%;">
                </div>
            </div>
        </div>
    </section>
    <section class="habilidades">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-6">
                    <div class="habilidadesCard">
                        <i class="fas fa-code"></i>
                        <h2> Lenguaje de programacion </h2>
                        <p> PHP, Laravel, HTML, CSS, Bootstrap, Javascript, jQuery, React.js, MySQL/MariaDB </p>
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="habilidadesCard">
                        <i class="fas fa-laptop"></i>
                        <h2> Software </h2>
                        <p style="margin-bottom: 42px;"> Git, Heidi SQL, Sublime Text, XAMPP, Word, Excel <br>
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="habilidadesCard">
                        <i class="fas fa-language"></i>
                        <h2> Idiomas </h2>
                        <p> INGLES - Intermedio <br> ESPAÑOL - Nativo
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="habilidadesCard">
                        <i class="fas fa-puzzle-piece"></i>
                        <h2> Hobbies</h2>
                        <p> Futbol <br> Leer <br>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section id="experiencia">
        <div class="container py-4">
            <div class="row">
                <div class="col-12 my-4">
                    <h1> Experiencia laboral</h1>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-sm-2 pl-4">
                    <h2> 2011-PRESENTE <br> Buenos aires</h2>
                </div>
                <div class="col-12 col-sm-2 pl-4">
                    <h3> EMPRESA </h3>

                </div>
                <div class="col-12 col-sm-8 pl-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore molestias suscipit repellendus cum iusto, facilis amet possimus expedita explicabo rerum numquam totam eius, magni id pariatur. Cupiditate consequuntur illo neque.</p>

                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-sm-2 pl-4">
                    <h2> 2011-PRESENTE <br> Buenos aires</h2>
                </div>
                <div class="col-12 col-sm-2 pl-4">
                    <h3> EMPRESA </h3>

                </div>
                <div class="col-12 col-sm-8 pl-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore molestias suscipit repellendus cum iusto, facilis amet possimus expedita explicabo rerum numquam totam eius, magni id pariatur. Cupiditate consequuntur illo neque.</p>

                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-sm-2 pl-4">
                    <h2> 2011-PRESENTE <br> Buenos aires</h2>
                </div>
                <div class="col-12 col-sm-2 pl-4">
                    <h3> EMPRESA </h3>

                </div>
                <div class="col-12 col-sm-8 pl-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore molestias suscipit repellendus cum iusto, facilis amet possimus expedita explicabo rerum numquam totam eius, magni id pariatur. Cupiditate consequuntur illo neque.</p>

                </div>
            </div>
        </div>


    </section>

    <footer>
        <?php
        include_once("footer.php");


        ?>



    </footer>





</body>

</html>